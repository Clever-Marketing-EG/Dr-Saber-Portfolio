<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class ArticleImage extends Image
{
    use HasFactory;

    protected $table = 'article_images';
}
