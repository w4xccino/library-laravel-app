<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use App\Models\Image;

class NotesController extends Controller
{
    public function getUserType()
    {
        $userType = Auth::user()->role_id;
        if ($userType == 2) {
            return false;
        }
        return true;
    }

    public function show()
    {
        if ($this->getUserType()) {
            $userId = Auth::id();
            $articles = Article::where("author_id", "=", $userId)->get();
            return view("notes.notes")->with("articles", $articles);
        } else {
            $articles = Article::all();
            // dd($articles->author->name);
            return view("notes.notes")->with("articles", $articles);
        }
    }

    public function addNewNoteGet()
    {
        return view("notes.add-note");
    }

    public function addNewNotePost(Request $request)
    {
        $user = Auth::id();
        $article = new Article();
        $imageModel = new Image();

        $request->validate([
            "title" => "required",
            "content" => "required",
            "image" => "required",
        ]);
        if ($request->hasFile("image")) {
            $destinationPath = "public/images";
            $image = $request->file("image");
            $imageName = Str::random(9) . "." . $request->image->extension();
            $path = $request
                ->file("image")
                ->storeAs($destinationPath, $imageName);
            $imageModel->name = $imageName;
        }

        // $article = Article::create([
        //     "title" => $request->title,
        //     "author" => $request->$user,
        //     "content" => $request->content,
        // ]);

        $article->title = $request->title;
        $article->author_id = $user;
        $article->content = $request->content;
        $article->timestamps = false; //this is useful when our model doesn't have enabled timestamps
        $article->save();
        $imageModel->article_id = $article->id;
        $imageModel->save();
        return view("home.index");
    }
}
