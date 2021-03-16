<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $meta1 = $this->faker->word;
        $meta2 = $this->faker->word;
        $meta3 = $this->faker->word;
        $meta = '["'.$meta1.'","'.$meta2.'","'.$meta3.'"]';
        return [
            'title' => $this->faker->unique()->sentence,
            'title_ar' => $this->faker->unique()->sentence,
            'content' => $this->faker->text,
            'content_ar' => $this->faker->text,
            'meta' => $meta,
            'video_url' => 'https://www.youtube.com/watch?v=WsptdUFthWI'
        ];
    }
}
