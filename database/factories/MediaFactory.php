<?php

namespace Database\Factories;

use App\Models\Media;
use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Media::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'title_ar' => $this->faker->sentence,
            'content' => $this->faker->text,
            'content_ar' => $this->faker->text,
            'video_url' => 'https://www.youtube.com/embed/WsptdUFthWI'
        ];
    }
}
