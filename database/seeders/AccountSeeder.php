<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            'first_name'=>'Ronald',
            'last_name'=>'Avila',
            'username'=>'ronald',
            'email'=>'ronaldra09gtech@gmail.com',
            'password'=>Hash::make('ra45645655'),
            'type'=> "Admin",
        ]);

        DB::table('accounts')->insert([
            'first_name'=>'Ivan',
            'last_name'=>'Siazon',
            'username'=>'princeivan',
            'email'=>'ivan@gamil.com',
            'password'=>Hash::make('123456789'),
            'type'=> "Admin",
        ]);

        DB::table('accounts')->insert([
            'first_name'=>'Lynel',
            'last_name'=>'Tabien',
            'username'=>'lynel123',
            'email'=>'lynel@gmail.com',
            'password'=>Hash::make('123456789'),
            'type'=> "Admin",
        ]);
    }
}