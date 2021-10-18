<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'avatar_url' => 'https://pbs.twimg.com/profile_images/1005052861749780485/ISQr7qG0_400x400.jpg',
            'comment' => $this->faker->realText(rand(10, 120))
        ];
    }
}
