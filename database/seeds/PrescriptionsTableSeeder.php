<?php

use Illuminate\Database\Seeder;

class PrescriptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        \DB::table('prescriptions')->delete();
        
        \DB::table('prescriptions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'doctor_id' => 1,
                'patient_id' => 1,
                'drug_id' => 1,
                'dose' => '2x daily',
                'created_at' => '2020-09-06 13:43:18',
                'updated_at' => '2020-09-06 13:43:18',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'doctor_id' => 2,
                'patient_id' => 2,
                'drug_id' => 2,
                'dose' => 'One a day',
                'created_at' => '2020-09-06 13:43:18',
                'updated_at' => '2020-09-06 13:43:18',
                'deleted_at' => NULL,
            ),
        ));
    }
}
