<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class Operation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_ar',
        'content',
        'content_ar',
        'video_url'
    ];

    /**
     * Saves a new Operation after validation steps
     *
     * @param Request $request
     * @return mixed
     * @throws ValidationException
     */
    public static function validateOperation(Request $request)
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

        $path = $request->image->store('operations_images');

//        dd($path);

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
