<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
class Image extends Model
{
    use HasFactory;
    protected $fillable = ["name"];

    public function article()
    {
        $this->belongsTo(Article::class, "article_id");
    }
}
