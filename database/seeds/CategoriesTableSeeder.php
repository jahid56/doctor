<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        DB::table('categories')->insert([
        	[
                'name'        => 'Hospital',
                ],
        	[
                'name'        => 'Clinic',
                ],
        	[
                'name'        => 'Consultation Center',
                ],
        	[
                'name'        => 'Dental Clinic',
                ],
        	[
                'name'        => 'Diagnostic Centre',
                ],
        	[
                'name'        => 'Upazila Health Complex',
                ]
            ]);
    }
}
