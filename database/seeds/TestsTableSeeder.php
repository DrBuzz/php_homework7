<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Factories;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('\App\Test'::class, 5)->create();
    }
}
