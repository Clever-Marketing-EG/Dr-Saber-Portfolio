<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\ValidationException;

class Media extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Validate Media item data
     *
     * @param Request $request
     * @return array
     * @throws ValidationException
     */
    public static function validateMedia(Request $request): array
    {
        $validated = $request->validate([
            'title' => 'required|min:3|string',
            'title_ar' => 'required|min:3|string',
            'content' => 'required|min:3|string',
            'content_ar' => 'required|min:3|string',
            'video_url' => 'nullable|url'
        ]);

        if($request['video_url'] && !preg_match("/^((?:https?:)?\/\/)?((?:www|m)\.)?((?:youtube\.com|youtu.be))(\/(?:[\w\-]+\?v=|embed\/|v\/)?)([\w\-]+)(\S+)?$/", $request['video_url'], $vidMatches))
        {
            throw ValidationException::withMessages(['YouTube video URL is not valid']);
        }

        return isset($vidMatches) ? array_merge(
            $validated,
            [
                'video_url' => 'https://www.youtube.com/embed/'.$vidMatches[5],
            ]
        ) : $validated;
    }

}
