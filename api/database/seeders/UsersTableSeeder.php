<?php

namespace Database\Seeders;


use Illuminate\Support\Facades\DB;
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
            [
                'name' => '川岡大輝',
                'email' => 'd.kawaoka0@gmail.com',
            ],
            [
                'name' => '山田一郎',
                'email' => 'ichiro.yamada@example.com',
            ],
            [
                'name' => '山田二郎',
                'email' => 'jiro.yamada@example.com',
            ],
        ]);
    }
}
