<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call(DivisionTableSeeder::class);
        $this->call(DistrictTableSeeder::class);
        $this->call(HospitalTableSeeder::class);
        // $this->call(DoctorTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(DcategoriesTableSeeder::class);

        Model::reguard();
    }
}
