<?php

use Illuminate\Database\Seeder;

class DrugsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('drugs')->delete();
        
        \DB::table('drugs')->insert(array (
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
