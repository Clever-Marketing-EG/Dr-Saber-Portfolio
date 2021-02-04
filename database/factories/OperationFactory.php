<?php

namespace Database\Factories;

use App\Models\Operation;
use Illuminate\Database\Eloquent\Factories\Factory;

class OperationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Operation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->unique()->word,
            'title_ar' => $this->faker->unique()->word,
            'description' => $this->faker->text,
            'description_ar' => $this->faker->text,
            'image_url' => $this->faker->imageUrl()
        ];
    }
}
