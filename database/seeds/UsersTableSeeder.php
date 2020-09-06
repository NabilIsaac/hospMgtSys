<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@hms.com',
                'password' => bcrypt('password'),
                'remember_token' => NULL,
                'created_at' => '2020-08-20 13:43:18',
                'updated_at' => '2020-08-20 13:43:18',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'nurse',
                'email' => 'nurse@hms.com',
                'password' => bcrypt('password'),
                'remember_token' => NULL,
                'created_at' => '2020-08-20 17:32:44',
                'updated_at' => '2020-08-22 00:31:25',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'receptionist',
                'email' => 'receptionist@hms.com',
                'password' => bcrypt('password'),
                'remember_token' => NULL,
                'created_at' => '2020-08-24 06:57:31',
                'updated_at' => '2020-08-24 06:57:31',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}