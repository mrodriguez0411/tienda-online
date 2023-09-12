<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB, Hash;
class FirstUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() : void
    {
        DB::table('users')->insert([
            'status' => '1',
            'role'=> '1',
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password'),
            'permissions' => json_encode (['all' => true])
        ]);
    }
}
