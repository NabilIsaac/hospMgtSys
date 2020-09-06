<?php

use Illuminate\Database\Seeder;

class ReceptionistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        \DB::table('receptionists')->delete();
        
        \DB::table('receptionists')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Victoria Peralta',
                'email' => 'victoriaperalta@hms.com',
                'phone' => '234-142-1567',
                'home_address' => '20444 140th St, Maysville, OK, 73057',
                'brief_history' => 'I am a very good receptionist',
                'created_at' => '2020-09-06 13:43:18',
                'updated_at' => '2020-09-06 13:43:18',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Maranatha Trump',
                'email' => 'maranathatrump@hms.com',
                'phone' => '770-136-46801',
                'home_address' => '29 Old Stage Coach Rd, Andover, NJ, 07821',
                'brief_history' => 'I am a smart receptionist',
                'created_at' => '2020-09-06 13:43:18',
                'updated_at' => '2020-09-06 13:43:18',
                'deleted_at' => NULL,
            ),
        ));
    }
}
