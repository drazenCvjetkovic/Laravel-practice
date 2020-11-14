<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Seeder;
use Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10) . '@gmail.com',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Drazen Cvjetkovic',
            'email' => 'drazen.cvjetkovic@mail.com',
            'password' => Hash::make('1234'),
        ]);

    }
}
