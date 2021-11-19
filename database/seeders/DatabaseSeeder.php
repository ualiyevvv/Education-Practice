<?php

namespace Database\Seeders;

use DB;
use Database\Seeders\PostSeeder;
use Database\Seeders\OrderSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'admin@mmm.ru',
            'name' => 'Admin',
            'phone' => 8999,
            'is_admin' => 1,
            'password' => bcrypt('123'),
        ]);
        
        $this->call([
            PostSeeder::class,
            OrderSeeder::class,
        ]);
        // \App\Models\Post::factory(21)->create();
        // \App\Models\Order::factory(15)->create();
    }
}
