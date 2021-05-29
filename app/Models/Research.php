<?php

namespace App\Models;


use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\ValidationException;

class Research extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'images' => 'array'
    ];


    public static function validateResearch(Request $request): array
    {
        $validated = $request->method() == ('PUT'|| 'PATCH') ? $request->validate([
            'title' => 'required|min:3|string',
            'title_ar' => 'required|min:3|string',
            'content' => 'required|min:3|string',
            'content_ar' => 'required|min:3|string',
            'images' => 'nullable|array|min:1',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'old_images' => 'nullable|array',
            'old_images.*' => 'required|string',
            'video_url' => 'nullable|url'
        ]) : $request->validate([
            'title' => 'required|min:3|string',
            'title_ar' => 'required|min:3|string',
            'content' => 'required|min:3|string',
            'content_ar' => 'required|min:3|string',
            'images' => 'required|array|min:1',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'video_url' => 'nullable|url'
        ]);

        $new_images = isset($validated['images'])?array_map(function($image){
            return asset($image->store('images'));
        }, $validated['images']) : [];


        $validated['images'] = isset($validated['old_images']) ?
            array_merge($new_images, $validated['old_images']) : $new_images ;
        unset($validated['old_images']);
        if($validated['video_url'] && !preg_match("/^((?:https?:)?\/\/)?((?:www|m)\.)?((?:youtube\.com|youtu.be))(\/(?:[\w\-]+\?v=|embed\/|v\/)?)([\w\-]+)(\S+)?$/", $request['video_url'], $vidMatches))
        {
            throw ValidationException::withMessages(['YouTube video URL is not valid']);
        }

        $validated['video_url'] = isset($vidMatches) ? 'https://www.youtube.com/embed/'.$vidMatches[5] : null;

        return  $validated;
    }
}
