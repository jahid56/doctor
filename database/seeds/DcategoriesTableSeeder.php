<?php

use Illuminate\Database\Seeder;

class DcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dcategories')->truncate();

        DB::table('dcategories')->insert([
        	[
                'name'        => 'Medicine',
                ],
        	[
                'name'        => 'Surgery',
                ],
        	[
                'name'        => 'Eye',
                ],
        	[
                'name'        => 'Heart disease',
                ],
        	[
                'name'        => 'Ear, Nose & Throat',
                ],
        	[
                'name'        => 'Dentistry',
                ],
        	
        	[
                'name'        => 'Orthopedic',
                ],
        	[
                'name'        => 'Nephrology',
                ]
            ]);
    }
}
