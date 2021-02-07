<?php

namespace Database\Factories;

use App\Models\Research;
use Illuminate\Database\Eloquent\Factories\Factory;

class ResearchFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Research::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->unique()->sentence,
            'title_ar' => $this->faker->unique()->sentence,
            'content' => $this->faker->text,
            'content_ar' => $this->faker->text,
            'image_url' => $this->faker->imageUrl(),
            'video_url' => 'https://www.youtube.com/watch?v=WsptdUFthWI'
        ];
    }
}
