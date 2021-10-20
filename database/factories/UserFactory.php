<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'google_id' => $this->faker->uuid,
            'display_name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'email_verified' => true,
            'avatar_url' => 'https://pbs.twimg.com/profile_images/1209461056340258817/vVnI9Uay.jpg',
        ];
    }
}
