<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pagina;
use Yajra\Datatables\Datatables;

class HomeController extends Controller
{
    public function _invoke(){
        return view ('hello');
    }

    public function empresa(){
        $datos["nombre"]="Ricardo Antonio Chab Pool";
        $datos["fecha"]="2026-12-15";
        $datos["actividad"]="Desarrollo de Software";
        $datos["descripcion_about"]="Empresa dedicada al desarrollo de software a la medida de sus clientes";
        $datos["texto_ejemplo"]="Aquí va la descripción del texto de ejemplo";

        $usuarios=new Pagina();
       $datos["listadousuarios"]=$usuarios->ObtenerListado();
        return view('empresa',$datos);
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
    // Método para Borrado Lógico
    public function borradoLogico($id) {
        $pagina = Pagina::find($id);
        
        if($pagina) {
            // Opción A: Si agregaste una columna manual a tu BD llamada 'is_active' o 'estatus'
            $pagina->is_active = 0; // O el valor que uses para "inactivo"
            $pagina->save();

            // Opción B: Si activaste el "SoftDeletes" nativo de Laravel en tu modelo
            // $pagina->delete(); 

            return response()->json(['mensaje' => 'Registro desactivado lógicamente con éxito.']);
        }
        
        return response()->json(['mensaje' => 'Error: Registro no encontrado.'], 404);
    }

    // Método para Borrado Físico
    public function borradoFisico($id) {
        $pagina = Pagina::find($id);
        
        if($pagina) {
            // Elimina el registro por completo de la base de datos
            $pagina->forceDelete(); 
            
            return response()->json(['mensaje' => 'Registro eliminado físicamente de la base de datos.']);
        }
        
        return response()->json(['mensaje' => 'Error: Registro no encontrado.'], 404);
    }
    

}
