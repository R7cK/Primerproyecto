<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Http\Request;
class Pagina extends Model
{
    // Esta como protected porque es un dato sensible.
    protected $table='paginas';
// Se usa cuando yo vaya a llamar a una consulta, a un dato que yo quiera y le pueda asignar ese formato
    protected function cast(): array{
        return[
            'created at' => 'datetime:d-m-Y',
            'is_active=>boolean'
        ];
    }

    protected function name(): Attribute{
        return Attribute::make(
            //Todo proceso antes de guardarlo  en base de datos, asi se va a guardar
            set: function ($value){//Mutador
                return strtolower ($value);
            },// Asi es como se va a ver en la base de datos, es el fotmato en el que vera el usuario
            // vast y get son algo similares, en el cast me da todo el formato, y en el get necesito uno por cada campo
            get:function($value){//Accesor
                return ucfirst($value);
            }
        );
    }

    public function ObtenerListado(){
        $listadousuarios=Pagina::all();
        return $listadousuarios;
    }

    public function BuscarId($id){
        $listadousuarios=Pagina::all();
        return $listadousuarios;
    }

        public function update(Request $request){
        $usuarios=new Pagina();
        $respuesta=$usuarios->BuscarId($request->id);
        if(!empty($respuesta)){
            $respuesta->name=$request->name;
            $respuesta->calle=$request->calle;
            $respuesta->save();
        }
        return $respuesta;
    }
    
}