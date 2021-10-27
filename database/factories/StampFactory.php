<?php

namespace Database\Factories;

use App\Models\Stamp;
use Illuminate\Database\Eloquent\Factories\Factory;

class StampFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Stamp::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'image_path' => $this->faker->imageUrl,
        ];
    }
}
