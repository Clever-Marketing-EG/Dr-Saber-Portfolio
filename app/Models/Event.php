<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_ar',
        'content',
        'content_ar',
        'image_url',
        'video_url'
    ];


    public function getCreatedAtAttribute($date): string
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('d - M - Y');
    }

    /**
     * relates to Images
     *
     * @return HasMany
     */
    public function images(): HasMany
    {
        return $this->hasMany(Image::class, 'external_id');
    }
}
