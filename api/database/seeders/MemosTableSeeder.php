<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class MemosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('memos')->insert([
            [
                'title' => 'メモ',
                'content' => 'メモメモメモメモメモメモメモメモメモ',
                'folder_id' => 1,
            ],
            [
                'title' => 'メモ2',
                'content' => 'メモ2メモ2メモ2メモ2メモ2メモ2メモ2メモ2メモ2',
                'folder_id' => 1,
            ],
            [
                'title' => '仕事メモ',
                'content' => 'メモメモメモメモメモメモメモメモメモ',
                'folder_id' => 2,
            ]
        ]);
    }
}
