<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            [
                'id'      => 1,
                'name'    => 'daitou',
                'comment' => 'アイウエオ',
                'post_id' => 1,
            ],
            [
                'id'      => 2,
                'name'    => 'daitou',
                'comment' => 'アイウエオかきくけこ',
                'post_id' => 1,
            ],
            [
                'id'      => 3,
                'name'    => 'daitou',
                'comment' => 'アイウエオかきくけこサシスセソ',
                'post_id' => 1,
            ],
        ]);
    }

}

?>