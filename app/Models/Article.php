<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ["title", "content"];

    public function author()
    {
        //This is very useful, i need to study
        return $this->belongsTo(User::class, "author_id");
    }
}
