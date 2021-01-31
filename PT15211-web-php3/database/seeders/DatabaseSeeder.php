<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            ['id'=>1,'name'=>'administrator', 'email'=>'thienth@fpt.edu.vn', 'password'=>bcrypt('123456')],
            ['id'=>2,'name'=>'member', 'email'=>'thienth32@fe.edu.vn', 'password'=>bcrypt('123456')],
        ]);
    }
}
