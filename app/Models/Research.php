<?php

namespace App\Models;


use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\ValidationException;

class Research extends Model
{
    use HasFactory;


    public static function validateResearch(Request $request): array
    {
        $validated = $request->validate([
            'title' => 'required|min:3|string',
            'title_ar' => 'required|min:3|string',
            'content' => 'required|min:3|string',
            'content_ar' => 'required|min:3|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240'
        ]);

        if(!preg_match("/^((?:https?:)?\/\/)?((?:www|m)\.)?((?:youtube\.com|youtu.be))(\/(?:[\w\-]+\?v=|embed\/|v\/)?)([\w\-]+)(\S+)?$/", $request['video_url'], $vidMatches))
        {
            throw ValidationException::withMessages(['YouTube video URL is not valid']);
        }

        $path = $request->image->store('researches_images');

        unset($validated['image']);
        return array_merge(
            $validated,
            [
                'image_url' => asset($path),
                'video_url' => 'https://www.youtube.com/embed/'.$vidMatches[5],
            ]
        );
    }

}
