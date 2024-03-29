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
        $this->call(CursoTableSeeder::class);
        $this->call(ColegioTableSeeder::class);
    	$this->call(EstudianteTableSeeder::class);
    }
}
