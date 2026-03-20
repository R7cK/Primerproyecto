<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PrincipalController;
use App\Models\Pagina;


//Route::get('/hello',HomeController::class);
Route::get('post/mensaje',[PostController::class,'Mensaje']);
Route::get('post/about/param}/{name}',[PostController::class,'About']);
/*Route::get('/', function () 
    return view('welcome');
});*/

Route::get('/empresa',[HomeController::class,'empresa'])->name('empresa');

Route::get('/contact',function(){
    $nombre="Ricardo Antonio Chab";
    return view('contact',['nombre'=>$nombre, 'carrera'=>'Estudiante']);
})->name('contact');

Route::get('/',function(){
    return view('welcome');
})->name('vista_inicio');


Route::get('nuevoregistro',function(){
$pagina = Pagina::firstOrCreate(
        ['email' => 'algo@gmail.com'], 
        [
            'name' => 'Ricardo',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'), // ¡Importante encriptar!
            'avatar' => 'user.png',
            'telefono' => '9999999',
            'calle' => '89'
        ]
    );
 
 return $pagina;
});

Route::get('buscarpaginaid',function(){
    $post=Pagina::find(2);
    return $post;
});


Route::get('buscarxname', function(){
    $post=Pagina::where('name','Hola')->first();
    return $post;
});

Route::get('obtenertodos', function(){
    $post=Pagina::all();
    return $post;
});

Route::get('updatename',function(){
    $post=Pagina::where('name', 'Quico Marciano')->first();
    $post->email='agongoraescalante125@gmail.com';
    $post->save();
    return $post;
});

Route::get('filter',function(){
    $post=Pagina::where('calle','like','%JosePancho%')->orderBy("id","desc")->get();
    return $post;
});

Route::get('trescampos',function(){
    $post=Pagina::select('name','email','telefono')->get();
    return $post;
});

Route::get('filtroxnumreg',function(){
    $post=Pagina::select('name','email')->orderBy("name")->take(2)->get();
    return $post;
});

Route::get('eliminar_registro',function(){
    $post=Pagina::find(5);
    $post->delete();
    return "Eliminado";
});

Route::get('Obtenerfechaformato',function(){
    $post=Pagina::select('name','email','created at')->find(3);
    return $post;
});

Route::get('Obtenerestatus',function(){
    $post=Pagina::find(1);
    dd($post->is_active);
});

Route::put('/actualizar-dato/{id}',[HomeController::class,'update'])->name('dato,update');
Route::put('/eliminar-logico/{id}', [HomeController::class, 'borradoLogico']);
Route::delete('/eliminar-fisico/{id}', [HomeController::class, 'borradoFisico']);
