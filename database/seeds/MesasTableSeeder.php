<?php

use Illuminate\Database\Seeder;
use restaurapp\Mesa;

class MesasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Mesa::class,10)->create();
    }
}
