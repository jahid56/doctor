<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
 
use Faker\Factory as Faker;

class DoctorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->truncate();

         DB::table('doctors')->insert([
            [
                'name'              => 'Prof. Dr. Md Aminul Islam',
                'division_id' => '1',
                'district_id' => '1',
                'dcategory_id' => '1',
                'institute'         => 'Shaheed Suhrawardy Medical College',
                'education'         => 'MBBS,MCPS ( Medicine ),MD ( nephrolaji )',
                'specialty'         => 'MBBS',
                'hospital'          => 'Meghna General Hospital Ltd,Bushra Clinic',
                'time'         => '6pm to 9pm',
                'fee'               => '500',
                'phone'             => '0171890127',
                ],
                [
                'name'              => 'Prof. Dr. Mohammad Billal Alam',
                'division_id' => '1',
                'district_id' => '1',
                'dcategory_id' => '1',
                'institute'         => 'Shaheed Suhrawardy Medical College',
                'specialty'         => 'MBBS',
                'time'         => '6pm to 9pm',
                'education'         => 'MBBS , FCPS ( Medicine ) , MD ( Internal Medicine ) , emaesipi , FCPS ( America )',
                'hospital'          => 'Uttara Crescent diagnostic and consultation center',
                'fee'               => '500',
                'phone'             => '01791571283',
                ]
        
            ]);
    }
}

