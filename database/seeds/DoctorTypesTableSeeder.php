<?php

use Illuminate\Database\Seeder;

class DoctorTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('doctor_types')->delete();
        
        \DB::table('doctor_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Surgeon',
                'description' => 'I perform surgeries',
                'created_at' => '2020-09-06 13:43:18',
                'updated_at' => '2020-09-06 13:43:18',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Pediatricians',
                'description' => 'I am a pediatrician',
                'created_at' => '2020-09-06 13:43:18',
                'updated_at' => '2020-09-06 13:43:18',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
