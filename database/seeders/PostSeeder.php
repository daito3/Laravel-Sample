<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'name' => 'daitou',
                'content' => 'あああああああああああああああ',
            ], 
            [
                'id' => 2,
                'user_id' => 2,
                'name' => 'daitou1',
                'content' => 'あああああああああああああああ',
            ],
            [
                'id' => 3,
                'user_id' => 3,
                'name' => 'daitou2',
                'content' => 'あああああああああああああああ',
            ],
        ]);
    }
}
