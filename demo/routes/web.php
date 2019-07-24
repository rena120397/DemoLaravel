<?php

Route::get('/', 'PagesController@inicio');

Route::get('/{id}', 'PagesController@detalle')->name('notas.detalle');

Route::get('fotos', 'PagesController@fotos')->name('foto');

Route::get('blog', 'PagesController@blog')->name('noticias');;

Route::any('nosotros/{nombre?}', 'PagesController@nosotros')->name('nosotros');

/* Route::get('fotos/{numero?}',function($numero = 'sin numero'){
    return 'estas en la galeria de fotos: '.$numero;
})->where('numero','[0-9]+'); */

// Route::view('galeria', 'fotos', ['numero'=>125]);