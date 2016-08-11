<?php

use Illuminate\Database\Seeder;

class DivisionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('divisions')->truncate();

        DB::table('divisions')->insert([
        	[
                'name'        => 'Dhaka',
                
                ],
        	[
                'name'        => 'Rajshahi',
                ],
        	[
                'name'        => 'Chittagong',
                ],
        	[
                'name'        => 'Khulna',
                ],
        	[
                'name'        => 'Sylhet',
                ],
        	[
                'name'        => 'Barisal',
                ],
        	
        	[
                'name'        => 'Rangpur',
                ],
        	[
                'name'        => 'Mymensingh',
                ]
            ]);
    }
}
