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
    $nombre="Alejandro Góngora Escalante";
    return view('contact',['nombre'=>$nombre,'carrera'=>'Doctor en Sistemas Computacionales']);
})->name('contact');
