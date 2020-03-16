<?php

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
       $user = \App\User::create([
           'name'=> "Abraham Seth",
           'email'=> "admin@admin.com",
           'email_verified_at'=> null,
           'password'=>bcrypt('MakalioMakalio')
       ]);
       $user-> save();
    }
}
