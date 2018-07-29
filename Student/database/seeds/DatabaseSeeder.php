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
        DB::table('student')->insert([
        	'name'=>'Nguyen Danh Vuong',
        	'age'=>'300',
        ]);

        DB::table('student')->insert([
            'name'=>'Nguyen A',
            'age'=>'3',
        ]);

        DB::table('student')->insert([
            'name'=>'Nguyen B',
            'age'=>'5',
        ]);
    }
}
