<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubMenuCatalogo;

class MenuCatalogo extends Model
{
    use HasFactory;

    protected $table = "menu_catalogos";
    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    public function submenus(){
        return $this->hasMany('App\Models\SubMenuCatalogo', 'id_menu');
    }
}
