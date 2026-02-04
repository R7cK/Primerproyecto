<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Pagina extends Model
{
    // Esta como protected porque es un dato sensible.
    protected $table='paginas';
    public function ObtenerListado(){
        $listadousuarios=Pagina::all();
        return $listadousuarios;
    }
}