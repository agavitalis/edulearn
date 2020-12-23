<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;


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
            'first_name' => "Edulearn",
            'last_name' => "Admin",
            'email' => "admin@edulearn.com",
            'password' => bcrypt('admin@edulearn'),
            'user_type'=>"admin",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'email_verified_at'=>"2020-12-23 08:42:38"
        ]);

        DB::table('users')->insert([
            'first_name' => "Edulearn",
            'last_name' => "Student",
            'email' => "student@edulearn.com",
            'password' => bcrypt('student@edulearn'),
            'user_type'=>"student",
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'email_verified_at'=>"2020-12-23 08:42:38"
        ]);
    }
}
