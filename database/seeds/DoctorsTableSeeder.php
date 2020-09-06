<?php

use Illuminate\Database\Seeder;

class DoctorsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('doctors')->delete();
        
        \DB::table('doctors')->insert(array (
            0 => 
            array (
                'id' => 1,
                'doctor_type_id' => 1,
                'name' => 'Dr. Kenneth Owens',
                'email' => 'kennethowens@gmail.com',
                'phone' => '308-204-2845',
                'specialization' => 'Heart Surgery',
                'brief_history' => 'I am a good surgeon',
                'home_address' => '719 Devils Nose Rd, Rogersville, TN, 37857',
                'created_at' => '2020-08-06 13:43:18',
                'updated_at' => '2020-08-06 13:43:18',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'doctor_type_id' => 2,
                'name' => 'Dr. James Smith',
                'email' => 'jamessmith@gmail.com',
                'phone' => '(423) 921-7676',
                'specialization' => 'Family Practice Physician',
                'brief_history' => 'I am a good doctor',
                'home_address' => '702 N Allen St, Montgomery City, MO, 63361',
                'created_at' => '2020-09-06 13:43:18',
                'updated_at' => '2020-09-06 13:43:18',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
