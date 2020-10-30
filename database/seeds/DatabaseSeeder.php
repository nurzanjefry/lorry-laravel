<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
            'created_at' => Carbon::now(),
            'created_id' => 0,
        ]);

        DB::table('users')->insert([
            'role' => 1,
            'remarks' => 'admin',
            'active' => true,
            'created_at' => Carbon::now(),
            'created_id' => 0,
        ]);
    }
}
