<?php

use Illuminate\Database\Seeder;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) { 
            DB::table('notes')->insert([
                'title' => Str::random(10),
                'content' => Str::random(10),
                'user_id' => 1,
            ]);
        }
    }
}
