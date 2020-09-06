<?php

use Illuminate\Database\Seeder;

class NursesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('nurses')->delete();
        
        \DB::table('nurses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Pamella Johnson',
                'email' => 'pamella@hms.com',
                'phone' => '229-330-6621',
                'home_address' => '20444 140th St, Maysville, OK, 73057',
                'specialization' => 'Midwife',
                'brief_history' => 'I am a very good nurse',
                'created_at' => '2020-09-06 13:43:18',
                'updated_at' => '2020-09-06 13:43:18',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Vanessa Adams',
                'email' => 'vanessa@hms.com',
                'phone' => '770-986-5293',
                'home_address' => '29 Old Stage Coach Rd, Andover, NJ, 07821',
                'specialization' => 'OPD',
                'brief_history' => 'I am a smart nurse',
                'created_at' => '2020-09-06 13:43:18',
                'updated_at' => '2020-09-06 13:43:18',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
