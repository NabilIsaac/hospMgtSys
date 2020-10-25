<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(DoctorTypesTableSeeder::class);
        $this->call(DoctorsTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(NursesTableSeeder::class);
        $this->call(PatientsTableSeeder::class);
        $this->call(ReceptionistsTableSeeder::class);
        $this->call(PharmaciesTableSeeder::class);
        $this->call(PrescriptionsTableSeeder::class);
        $this->call(RecordsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);
        
    }
}
