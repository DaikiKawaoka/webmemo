<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FoldersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('folders')->insert([
            [
                'name' => 'メモ',
                'user_id' => 1,
            ],
            [
                'name' => '仕事',
                'user_id' => 1,
            ],
            [
                'name' => 'プライベート',
                'user_id' => 1,
            ],
            [
                'name' => 'メモ',
                'user_id' => 2,
            ],
            [
                'name' => '仕事',
                'user_id' => 2,
            ],
            [
                'name' => 'プライベート',
                'user_id' => 2,
            ],
            [
                'name' => 'メモ',
                'user_id' => 3,
            ],
            [
                'name' => '仕事',
                'user_id' => 3,
            ],
            [
                'name' => 'プライベート',
                'user_id' => 3,
            ],
        ]);
    }
}
