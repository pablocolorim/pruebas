<?php

namespace Database\Seeders;

use App\Models\MenuCatalogo;
use Illuminate\Database\Seeder;

class MenuCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MenuCatalogo::create([
           'descripcion' => 'Proveedores'
        ]);
        MenuCatalogo::create([
            'descripcion' => 'Inventario'
        ]);
        MenuCatalogo::create([
            'descripcion' => 'Bancos'
        ]);
        MenuCatalogo::create([
            'descripcion' => 'Clientes'
        ]);
        MenuCatalogo::create([
            'descripcion' => 'Activo Fijo'
        ]);
        MenuCatalogo::create([
            'descripcion' => 'Contabilidad'
        ]);
        MenuCatalogo::create([
            'descripcion' => 'Empleados'
        ]);
        MenuCatalogo::create([
            'descripcion' => 'Administración'
        ]);
    }
}
