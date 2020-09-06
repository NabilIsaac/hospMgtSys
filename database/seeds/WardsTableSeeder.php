<?php

use Illuminate\Database\Seeder;

class WardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('wards')->delete();
        
        \DB::table('wards')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Emergency',
                'supervisor_id' => 1,
                'block_name' => 'Block A',
                'no_of_rooms' => 25,
                'created_at' => '2020-09-06 13:43:18',
                'updated_at' => '2020-09-06 13:43:18',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Labour',
                'supervisor_id' => 2,
                'block_name' => 'Block B',
                'no_of_rooms' => 50,
                'created_at' => '2020-09-06 13:43:18',
                'updated_at' => '2020-09-06 13:43:18',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Consulting',
                'supervisor_id' => 2,
                'block_name' => 'Block C',
                'no_of_rooms' => 20,
                'created_at' => '2020-09-06 13:43:18',
                'updated_at' => '2020-09-06 13:43:18',
                'deleted_at' => NULL,
            ),
        ));
    }
}
