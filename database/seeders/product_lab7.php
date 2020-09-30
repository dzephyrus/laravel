<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class product_lab7 extends Seeder
{
    /**
     * Run the database seeds.
     * 
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('users')->count() === 0){
            DB::table('users')->insert([
                [

                ]
            ])
        }
    }
}
