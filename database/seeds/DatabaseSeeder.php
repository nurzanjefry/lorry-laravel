<?php

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
            'name' => 'User1',
            'role' => 1,
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
        ]);
    }
}
