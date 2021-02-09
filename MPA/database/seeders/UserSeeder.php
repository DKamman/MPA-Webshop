<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Seeding users from \database\seeders\UserSeeder');

        DB::table('users')->insert([
            'name' => 'Danny Kamman',
            'username' => 'Danny',
            'email' => 'danny@danny.com',
            'password' => 'Danny'
        ]);
    }
}
