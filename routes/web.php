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

Route::get('/empresa',function(){
    $titulo="Tienda Virtual - Vista Principal";
    $mensaje="Bienvenido a la vista principal";
    $autor="Emmanuel Soto Sosa";
    $descripcion_about="hola";
    $nombre="Emmanuel Soto Sosa";
    $texto_ejemplo="Este es un ejemplo de texto para la vista de la empresa.";
    $actividad="venta de productos y servicios en línea";
    $listadousuarios=Pagina::all();
    return view('empresa',compact('titulo','mensaje','autor','descripcion_about','nombre','texto_ejemplo','actividad','listadousuarios'));
})->name('empresa');