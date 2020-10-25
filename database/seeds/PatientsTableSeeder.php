<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \DB::table('patients')->delete();
        
        \DB::table('patients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'doctor_id' => 1,
                'room_id' => 1,
                'fullname' => 'Victor Fulton',
                'home_address' => '3387 80th Hwy W, Calhoun, LA, 71225',
                'phone' => '(318) 644-5256',
                'email' => 'victorfulton12@gmail.com',
                'gender' => 'male',
                'age' => '54',
                'created_by' => 2,
                'insurance' => '2123-2123-1224',
                'status' => 'discharged',
                'next_of_kin' => 'Martin Fulton',
                'marital_status' => 'married',
                'disease' => 'Malaria',
                'created_at' => '2020-09-06 13:43:18',
                'updated_at' => '2020-09-06 13:43:18',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'doctor_id' => 2,
                'room_id' => 2,
                'fullname' => 'Rose Stewart',
                'home_address' => '10669 Mountain View Dr, Madera, CA, 93638',
                'phone' => '(724) 935-3813',
                'email' => 'rose34@yahoo.com',
                'gender' => 'female',
                'age' => '34',
                'created_by' => 1,
                'insurance' => '433-9133-7127',
                'status' => 'admission',
                'next_of_kin' => 'Josephine Fulton',
                'marital_status' => 'divorced',
                'disease' => 'Colon Cancer',
                'created_at' => '2020-09-06 13:43:18',
                'updated_at' => '2020-09-06 13:43:18',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
