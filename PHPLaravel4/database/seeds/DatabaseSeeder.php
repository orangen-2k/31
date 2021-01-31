<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>'chien', 'email'=>'chien@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'role'=>'1'],
            ['name'=>'chien2', 'email'=>'chien2@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'role'=>'2'],
            ['name'=>'chien', 'email'=>'chien1@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'role'=>'1'],
            ['name'=>'chien2', 'email'=>'chien12@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'role'=>'2'],
            ['name'=>'chien', 'email'=>'chien222@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'role'=>'1'],
            ['name'=>'chien2', 'email'=>'chien22@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'role'=>'2'],
            ['name'=>'chien', 'email'=>'chien3@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'role'=>'1'],
            ['name'=>'chien2', 'email'=>'chien32@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'role'=>'2'],
            ['name'=>'chien', 'email'=>'chien4@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'role'=>'1'],
            ['name'=>'chien2', 'email'=>'chien42@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'role'=>'2'],
            ['name'=>'chien', 'email'=>'chien5@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'role'=>'1'],
            ['name'=>'chien2', 'email'=>'chien52@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'role'=>'2'],
            ['name'=>'chien', 'email'=>'chien6@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'role'=>'1'],
            ['name'=>'chien2', 'email'=>'chien62@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'role'=>'2'],
            ['name'=>'chien', 'email'=>'chien7@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'role'=>'1'],
            ['name'=>'chien2', 'email'=>'chien72@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'role'=>'2'],
            ['name'=>'chien', 'email'=>'chien8@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'role'=>'1'],
            ['name'=>'chien2', 'email'=>'chien82@gmail.com', 'password'=>bcrypt('123'), 'number'=>'0963328520'
                , 'role'=>'2'],
        ]);
    }
}
