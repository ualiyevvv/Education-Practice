<?php

namespace Database\Factories;

use App\Models\Order;
// use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $date = $this->faker->dateTimeBetween('-3 months','-2 months');
        $maker = ["BAXTER OF CALIFORNIA","ME NATTY","MURRAY'S"];
        $category = ["SHAVING ACCESSORIES","CARE PRODUCTS","ACCESSORIES"];
        return [
            'caption' => $this->faker->sentence,
            'description' => $this->faker->text(500),
            'price' => $this->faker->numberBetween(1500, 5000),
            'file' => '/img/default.jpg',
            'maker'	=>	$maker[rand(0,2)],
            'category'	=>	$category[rand(0,2)],
            'user_id'	=>	1,
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}