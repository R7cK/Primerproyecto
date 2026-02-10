<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PrincipalController;


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