<?php

namespace Database\Factories;

use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    // protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $faker = new Faker;
        $date = $this->faker->dateTimeBetween('-30 days', '-1 days');
        return [
            'caption' => $this->faker->sentence,
            'content' => $this->faker->text(2000),
            'file' => '/img/default.jpg',
            'created_at' => $date,
            'updated_at' => $date,
            'user_id'	=>	1,
        ];
    }
}