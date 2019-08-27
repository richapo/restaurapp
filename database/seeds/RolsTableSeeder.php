<?php

use Illuminate\Database\Seeder;
use restaurapp\Rol;

class RolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
            'nombre'=>'administrador',
            'comentario'=>'persona encargada de la administracion'
        ])->save();

        Rol::create([
            'nombre'=>'cocinero',
            'comentario'=>'persona encargada de la cocina'
        ])->save();

        Rol::create([
            'nombre'=>'finanza',
            'comentario'=>'persona encargada de la finanza'
        ])->save();
        Rol::create([
            'nombre'=>'bodegero',
            'comentario'=>'persona encargada de la bodega'
        ])->save();
    }
}
