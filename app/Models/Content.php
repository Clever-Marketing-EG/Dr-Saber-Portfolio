<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_ar',
        'content',
        'content_ar'
    ];

    public $timestamps = false;

    public static function loadEnglishContent()
    {
        return Content::select('position', 'content')
            ->get()->mapWithKeys(function ($item) {
                return [$item['position'] => $item['content']];
            })->toArray();
    }

    public static function loadArabicContent()
    {
        return Content::select('position', 'content_ar')
            ->get()->mapWithKeys(function ($item) {
                return [$item['position'] => $item['content_ar']];
            })->toArray();
    }
}
