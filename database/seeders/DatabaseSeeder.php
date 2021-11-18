<?php

namespace Database\Seeders;

use DB;
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
            'password' => bcrypt(123),
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
