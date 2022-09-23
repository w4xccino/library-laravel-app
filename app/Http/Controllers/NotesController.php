<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;

class NotesController extends Controller
{
    public function show()
    {
        $userId = Auth::id();
        $articles = Article::where("author_id", "=", $userId)->get();
        return view("notes.notes")->with("articles", $articles);
    }

    public function addNewNoteGet()
    {
        return view("notes.add-note");
    }

    public function addNewNotePost(Request $request)
    {
        $user = Auth::id();
        $request->validate([
            "title" => "required",
            "content" => "required",
        ]);

        // $article = Article::create([
        //     "title" => $request->title,
        //     "author" => $request->$user,
        //     "content" => $request->content,
        // ]);

        $article = new Article();
        $article->title = $request->title;
        $article->author_id = $user;
        $article->content = $request->content;
        $article->timestamps = false; //this is useful when our model doesn't have enabled timestamps
        $article->save();
        return view("home.index");
    }
}
