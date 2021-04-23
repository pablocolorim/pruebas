<?php

namespace Database\Seeders;

use App\Models\SubMenuCatalogo;
use Illuminate\Database\Seeder;

class SubMenuCatalogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        SubMenuCatalogo::create([
           'id_menu' => '7',
            'descripcion' => 'Norma 35 STPS'
        ]);
    }
}
