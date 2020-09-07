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
        $this->call(WardsTableSeeder::class);
        $this->call(RoomsTableSeeder::class);
        $this->call(NursesTableSeeder::class);
        $this->call(PatientsTableSeeder::class);
        $this->call(ReceptionistsTableSeeder::class);
        $this->call(DrugsTableSeeder::class);
        $this->call(PrescriptionsTableSeeder::class);
        $this->call(ExaminationsTableSeeder::class);
        $this->call(AppointmentsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);
        
    }
}
