<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
      'name',
      'url'
    ];

    protected $table = 'images';


    public static function loadImages()
    {
        return Image::select('name', 'url')
            ->get()->mapWithKeys(function ($item) {
                return [$item['name'] => $item['url']];
            })->toArray();
    }

}
