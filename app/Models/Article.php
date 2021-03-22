<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_ar',
        'content',
        'content_ar',
        'meta',
        'image_url',
        'video_url'
    ];


    /**
     * relates to Images
     *
     * @return HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(ArticleImage::class, 'article_id');
    }


    /**
     * validate Article data
     *
     * @param Request $request
     * @return mixed
     * @throws ValidationException
     */
    public static function validateArticle(Request $request)
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

        if(!preg_match("/[^,\s?]*/", $request['meta'], $metaMatches))
        {
            throw ValidationException::withMessages(['Meta tags must be separated by commas']);
        }

        $metaArray = explode(',', $request['meta']);
        $metas = '[';
        foreach($metaArray as $meta)
        {
            $metas .= '"'.$meta.'"'. ',';
        }
        $metas = rtrim($metas, ",");
        $metas .= ']';

        return array_merge(
            $validated,
            [
                'video_url' => 'https://www.youtube.com/embed/'.$vidMatches[5],
                'meta' => $metas
            ]
        );
    }
}
