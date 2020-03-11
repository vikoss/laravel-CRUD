<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Victor',
            'email' => 'victor@gmail.com',
            'password' => Hash::make('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Juan',
            'email' => 'juan@gmail.com',
            'password' => Hash::make('secret'),
        ]);
    }
}
