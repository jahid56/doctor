<?php

use Illuminate\Database\Seeder;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('districts')->truncate();

         DB::table('districts')->insert([
        	[
                'name'        => 'Dhaka',
                'division_id'=> '1',
                ],

                [
                'name'        => 'Faridpur',
                'division_id'=> '1',
                ],

                [
                'name'        => 'Gazipur',
                'division_id'=> '1',
                ],
                [
                'name'        => 'Gopalganj',
                'division_id'=> '1',
                ],
                [
                'name'        => 'Kishoreganj',
                'division_id'=> '1',
                ],
                [
                'name'        => 'Madaripur',
                'division_id'=> '1',
                ],
                [
                'name'        => 'Manikganj',
                'division_id'=> '1',
                ],
                [
                'name'        => 'Munshiganj',
                'division_id'=> '1',
                ],
                [
                'name'        => 'Narayanganj',
                'division_id'=> '1',
                ],
                [
                'name'        => 'Narsingdi',
                'division_id'=> '1',
                ],
                [
                'name'        => 'Rajbari',
                'division_id'=> '1',
                ],
                [
                'name'        => 'Shariatpur',
                'division_id'=> '1',
                ],

        		[
                'name'        => 'Tangail',
                'division_id'=> '1',
                ],

        	[
                'name'        => 'Rajshahi',
                'division_id'=> '2',
                ],
        	[
                'name'        => 'Natore',
                'division_id'=> '2',
                ],
        	[
                'name'        => 'Bogra',
                'division_id'=> '2',
                ],
                [
                'name'        => 'Joypurhat',
                'division_id'=> '2',
                ],
                [
                'name'        => 'Naogaon',
                'division_id'=> '2',
                ],

                [
                'name'        => 'Chapainawabganj',
                'division_id'=> '2',
                ],
                [
                'name'        => 'Pabna',
                'division_id'=> '2',
                ],
                [
                'name'        => 'Dinajpur',
                'division_id'=> '2',
                ],

        	[
                'name'        => 'Chittagong',
                'division_id'=> '3',
                ],

                [
                'name'        => 'Bandarban',
                'division_id'=> '3',
                ],
                [
                'name'        => 'Brahmanbaria',
                'division_id'=> '3',
                ],
                [
                'name'        => 'Chandpur',
                'division_id'=> '3',
                ],
                [
                'name'        => 'Comilla',
                'division_id'=> '3',
                ],
                [
                'name'        => 'Coxs Bazar',
                'division_id'=> '3',
                ],
                [
                'name'        => 'Feni',
                'division_id'=> '3',
                ],
                [
                'name'        => 'Khagrachhari',
                'division_id'=> '3',
                ],

        	[
                'name'        => 'Lakshmipur',
                'division_id'=> '3',
                ],

                [
                'name'        => 'Noakhali',
                'division_id'=> '3',
                ],
                [
                'name'        => 'Rangamati',
                'division_id'=> '3',
                ],

            [
                'name'        => 'Khulna',
                'division_id'=> '4',
                ],
                [
                'name'        => 'Bagerhat',
                'division_id'=> '4',
                ],
                [
                'name'        => 'Chuadanga',
                'division_id'=> '4',
                ],
                [
                'name'        => 'Jessore',
                'division_id'=> '4',
                ],
                [
                'name'        => 'Jhenaidah',
                'division_id'=> '4',
                ],
                [
                'name'        => 'Kushtia',
                'division_id'=> '4',
                ],
                [
                'name'        => 'Magura',
                'division_id'=> '4',
                ],
                [
                'name'        => 'Meherpur',
                'division_id'=> '4',
                ],
                [
                'name'        => 'Narail',
                'division_id'=> '4',
                ],
                [
                'name'        => 'Satkhira',
                'division_id'=> '4',
                ],
                [
                'name'        => 'Sylhet',
                'division_id'=> '5',
                ],
                [
                'name'        => 'Sunamganj',
                'division_id'=> '5',
                ],
                [
                'name'        => 'Moulvibazar',
                'division_id'=> '5',
                ],
                [
                'name'        => 'Habiganj',
                'division_id'=> '5',
                ],
                [
                'name'        => 'Barisal',
                'division_id'=> '6',
                ],
                [
                'name'        => 'Barguna',
                'division_id'=> '6',
                ],
                [
                'name'        => 'Bhola',
                'division_id'=> '6',
                ],
                [
                'name'        => 'Jhalokati',
                'division_id'=> '6',
                ],
                [
                'name'        => 'Patuakhali',
                'division_id'=> '6',
                ],
                [
                'name'        => 'Pirojpur',
                'division_id'=> '6',
                ],
                [
                'name'        => 'Rangpur',
                'division_id'=> '7',
                ],
                [
                'name'        => 'Gaibandha',
                'division_id'=> '7',
                ],
                [
                'name'        => 'Kurigram',
                'division_id'=> '7',
                ],
                [
                'name'        => 'Lalmonirhat',
                'division_id'=> '7',
                ],
                [
                'name'        => 'Nilphamari',
                'division_id'=> '7',
                ],
                [
                'name'        => 'Panchagarh',
                'division_id'=> '7',
                ],
                [
                'name'        => 'Thakurgaon',
                'division_id'=> '7',
                ],
                [
                'name'        => 'Mymensingh',
                'division_id'=> '8',
                ],
                [
                'name'        => 'Jamalpur',
                'division_id'=> '8',
                ],
                [
                'name'        => 'Netrakona',
                'division_id'=> '8',
                ],
                [
                'name'        => 'Sherpur',
                'division_id'=> '8',
                ]
            ]);
    }
}
