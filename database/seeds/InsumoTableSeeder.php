<?php

use Illuminate\Database\Seeder;
use restaurapp\Insumo;

class InsumoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Insumo::class,10)->create();
    }
}
