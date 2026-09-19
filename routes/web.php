<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Models\Pagina;

Route::get('/', function () {
    return view('welcome');
}) ->name('vista_inicio');

Route::get('/principal',function(){
    $datos=["titulo"=>"Tienda Virtual - Vista Principal","mensaje"=>"Bienvenido a la vista principal","Autor"=>"Emmanuel Soto Sosa"];
    return view('principal',$datos);
})->name('principal');

Route::get('/mensaje/{id}',function($id){
    return "Mostrando el mensaje: {$id}";
})->where('id','[0-9]+');

Route::get('/contact',function(){
    $nombre="Emmanuel Soto Sosa";
    return view('contact',['nombre'=>$nombre,'carrera'=>'Licenciado en Administración de Tecnologías de la Información']);
})->name('contact');
