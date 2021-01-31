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
//        DB::table('users')->insert([
//            'name'=>'Ph1u',
//            'email'=>'phu@g1mail.com',
//            'password'=>bcrypt('123')
//        ]);
        $this->call(usserSeeder::class);
    }
}

class usserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>'chie11n', 'email'=>'1112131342@g1m1aawd2csaild.com', 'password'=>bcrypt('123')],
            ['name'=>'chien1', 'email'=>'1112131342@g1m1qaw1csaild.com', 'password'=>bcrypt('123')],
            ['name'=>'chien11', 'email'=>'111213134 12@g1m1awdc3saild.com', 'password'=>bcrypt('123')],
            ['name'=>'chien111', 'email'=>'1112131342@g13am1awdcsaild.com', 'password'=>bcrypt('123')],
            ['name'=>'chien1111', 'email'=>'1111213134d2@g1m12awdcsaild.com', 'password'=>bcrypt('123')],
            ['name'=>'chien2', 'email'=>'1112131342@g14m1awadcsaild.com', 'password'=>bcrypt('123')],
            ['name'=>'chien22', 'email'=>'111212313412@gá1m1sawdcsaild.com', 'password'=>bcrypt('123')],
            ['name'=>'chien222', 'email'=>'11121313d342@g1m1awdcsaild.com', 'password'=>bcrypt('123')],
            ['name'=>'chien2222', 'email'=>'11121313142@g1m1sawdcsaild.com', 'password'=>bcrypt('123')],
            ['name'=>'chien3', 'email'=>'1112131342@g1m31awdacsaild.com', 'password'=>bcrypt('123')],
            ['name'=>'chien33', 'email'=>'1112131342@g121m1aawdcsaild.com', 'password'=>bcrypt('123')],
            ['name'=>'chien333', 'email'=>'11121331342@g1m1awdcsaild.com', 'password'=>bcrypt('123')],
            ['name'=>'chien3333', 'email'=>'1112131A1342@gƯ1mƯ1awdcsaild.com', 'password'=>bcrypt('123')],
            ['name'=>'chien4', 'email'=>'111213134S122@g1m1awdcsaild.com', 'password'=>bcrypt('123')],
            ['name'=>'chien44', 'email'=>'11121313A242@g1m1awdcsaild.com', 'password'=>bcrypt('123')],
            ['name'=>'chien444', 'email'=>'1112131A3342@gS1m1awdcsaild.com', 'password'=>bcrypt('123')],
            ['name'=>'chien4444', 'email'=>'111213S113S42@g1m1awdcsaild.com', 'password'=>bcrypt('123')],
            ['name'=>'chien5', 'email'=>'11121313342@g1AmA1awdcsaild.com', 'password'=>bcrypt('123')],
            ['name'=>'chien5', 'email'=>'121121313A42@g1m1awdcsaild.com', 'password'=>bcrypt('123')],
//            ['name'=>'Pchccs1cw1u', 'email'=>str_random(300).'@gw1cmqcc1asail.com', 'password'=>bcrypt('12c3a')],
        ]);
    }
}
