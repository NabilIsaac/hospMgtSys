<?php

use Illuminate\Database\Seeder;

class ExaminationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('examinations')->delete();
        
        \DB::table('examinations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'patient_id' => 1,
                'nurse_id' => 1,
                'symptoms' => 'Cold, headaches, burry vision',
                'comment' => 'He looks very ill',
                'created_at' => '2020-09-06 13:43:18',
                'updated_at' => '2020-09-06 13:43:18',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'patient_id' => 2,
                'nurse_id' => 2,
                'symptoms' => 'Stomach pain',
                'comment' => 'He is suffering from a severe stomachache',
                'created_at' => '2020-09-06 13:43:18',
                'updated_at' => '2020-09-06 13:43:18',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}

