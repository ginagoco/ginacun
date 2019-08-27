<?php

use Illuminate\Database\Seeder;

class ColegioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Colegio::class,5)->create();
    }
}
