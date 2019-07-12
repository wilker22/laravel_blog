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
         //reset the users table
         DB::statement('SET FOREIGN_KEY_CHECKS=0');
         DB::table('users')->truncate();
 
         //generate 3 users/author
         DB::table('users')->insert([
             [
                 'name' => "Manoel Wilker",
                 'email' => "wilker-22@outlook.com",
                 'password' => bcrypt('secret') 
             ],
             [
                 'name' => "Jozy Viana",
                 'email' => "jozy_v@hotmail.com",
                 'password' => bcrypt('secret') 
             ],
             [
                 'name' => "Ygor Daniel",
                 'email' => "ygor@outlook.com",
                 'password' => bcrypt('secret') 
             ]
         ]);
 
     }
    
}
