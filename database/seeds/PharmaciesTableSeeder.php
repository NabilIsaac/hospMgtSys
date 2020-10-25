<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PharmaciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pharmacies')->delete();
        
        DB::table('pharmacies')->insert(array (
            0 => 
            array (
                'id' => 1,
                'drug_name' => 'Panadol',
                'drug_brand' => 'Panadol',
                'description' => 'For headaches',
                'created_at' => '2020-09-06 13:43:18',
                'updated_at' => '2020-09-06 13:43:18',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'drug_name' => 'Xanax',
                'drug_brand' => 'Xanax',
                'description' => 'For Energy',
                'created_at' => '2020-09-06 13:43:18',
                'updated_at' => '2020-09-06 13:43:18',
                'deleted_at' => NULL,
            ),
        ));
    }
}
