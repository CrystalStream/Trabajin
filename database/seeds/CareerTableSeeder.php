<?php


use Illuminate\Database\Seeder;

class CareerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    	
    	factory(App\myModel\Career::class,11)->create();

    }
}
