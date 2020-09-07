<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        DB::table('roles')->delete();
        
        DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'guard_name' => 'web',
                'created_at' => '2020-05-29 12:46:45',
                'updated_at' => '2020-05-29 12:46:45',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'nurse',
                'guard_name' => 'web',
                'created_at' => '2020-05-29 12:46:45',
                'updated_at' => '2020-05-29 12:46:45',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'receptionist',
                'guard_name' => 'web',
                'created_at' => '2020-05-29 12:46:45',
                'updated_at' => '2020-05-29 12:46:45',
            ),
        ));
        
        
    }
}