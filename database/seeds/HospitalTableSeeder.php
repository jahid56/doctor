<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
 
use Faker\Factory as Faker;

class HospitalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hospitals')->truncate();

         DB::table('hospitals')->insert([
            [
                'name'                 => 'Badda General Hospital and Diagnostic Centre Ltd',
                'division_id' => '1',
                'district_id' => '1',
                'category_id' => '1', 
                'address'         	   => '1072 North Badda ( Pragati Sarani ) , dhakah 1212',
                'ownership'            => 'Private',
                'activities'           => '2004',
                'beds'				   =>'30',
                'doctors'			   =>'20',
                'phone'             => '9857828',
                ],
                [
                'name'                 => 'Shaheed Suhrawardy Medical College',
                'division_id' => '1',
                'district_id' => '1',
                'category_id' => '2',	 
                'address'         	   => 'Sher - e - Bengali Nagar , dhakah 1207',
                'ownership'            => 'Government',
                'activities'           => '2004',
                'beds'				   =>'30',
                'doctors'			   =>'20',
                'phone'             => '8144048',
                ],
                [
                'name'                 => 'Asian Cardiac and General Hospital',
                'division_id' => '1',
                'district_id' => '1',
                'category_id' => '1',	 
                'address'         	   => '313 barih , blakah - B , Mohammadpur , dhakah 1207',
                'ownership'            => 'Private',
                'activities'           => '2002',
                'beds'				   =>'26',
                'doctors'			   =>'20',
                'phone'             => '98578455',
                ],
                [
                'name'                 => 'Birdem Hospital',
                'division_id' => '1',
                'district_id' => '1',
                'category_id' => '1',	 
                'address'         	   => '122 , Kazi Nazrul Islam Avenue , sahbaga dhakah 1000',
                'ownership'            => 'Private',
                'activities'           => '2004',
                'beds'				   =>'30',
                'doctors'			   =>'20',
                'phone'             => '98572243',
                ],
                [
                'name'                 => 'Al- Safi Hospital',
                'division_id' => '1',
                'district_id' => '1',
                'category_id' => '1',	 
                'address'         	   => 'barih -9 , -6 Road , mirapurah -10 / A , PSD pallabi , dhakah 1216',
                'ownership'            => 'Private',
                'activities'           => '2004',
                'beds'				   =>'50',
                'doctors'			   =>'40',
                'phone'             => '9857444',
                ],
                [
                'name'                 => 'Mirpur Delta Health Care Ltd.',
                'division_id' => '1',
                'district_id' => '1',
                'category_id' => '1',	 
                'address'         	   => 'mirpur 11 , -45 platah next to the mosque , sekasanah 7, 1216 pallabi dhaka 1216',
                'ownership'            => 'Private',
                'activities'           => '2014',
                'beds'				   =>'100',
                'doctors'			   =>'30',
                'phone'             => '9857556',
                ]
        
	        ]);
    }
}
