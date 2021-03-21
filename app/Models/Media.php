<?php

namespace App\Models;

use http\Env\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\ValidationException;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_ar',
        'content',
        'content_ar',
        'video_url'
    ];

    public static function validateMedia(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3|string',
            'title_ar' => 'required|min:3|string',
            'content' => 'required|min:3|string',
            'content_ar' => 'required|min:3|string',
        ]);

        if(!preg_match("/^((?:https?:)?\/\/)?((?:www|m)\.)?((?:youtube\.com|youtu.be))(\/(?:[\w\-]+\?v=|embed\/|v\/)?)([\w\-]+)(\S+)?$/", $request['video_url'], $vidMatches))
        {
            throw ValidationException::withMessages(['YouTube video URL is not valid']);
        }

        return array_merge(
            $validated,
            [
                'video_url' => 'https://www.youtube.com/embed/'.$vidMatches[5],
            ]
        );
    }
}
