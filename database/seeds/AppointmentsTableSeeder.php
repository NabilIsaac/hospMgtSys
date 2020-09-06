<?php

use Illuminate\Database\Seeder;

class AppointmentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('appointments')->delete();
        
        \DB::table('appointments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'doctor_id' => 1,
                'patient_id' => 1,
                'appointment_date' => '2020-09-06 13:43:18',
                'created_at' => '2020-08-20 13:43:18',
                'updated_at' => '2020-08-20 13:43:18',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'doctor_id' => 2,
                'patient_id' => 2,
                'appointment_date' => '2020-08-06 13:43:18',
                'created_at' => '2020-08-20 13:43:18',
                'updated_at' => '2020-08-20 13:43:18',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
