<?php

Route::get('/', 'PagesController@inicio')->name('inicio');

Route::get('/detalle/{id}', 'PagesController@detalle')->name('notas.detalle');

Route::post('/', 'PagesController@Crear' )->name('notas.crear');

Route::get('/editar/{id}', 'PagesController@editar')->name('notas.editar');

Route::put('/update/{id}', 'PagesController@update')->name('notas.update');

Route::delete('/eliminar/{id}', 'PagesController@eliminar')->name('notas.eliminar');

Route::get('fotos', 'PagesController@fotos')->name('foto');

Route::get('blog', 'PagesController@blog')->name('noticias');;

Route::any('nosotros/{nombre?}', 'PagesController@nosotros')->name('nosotros');

/* Route::get('fotos/{numero?}',function($numero = 'sin numero'){
    return 'estas en la galeria de fotos: '.$numero;
})->where('numero','[0-9]+'); */

// Route::view('galeria', 'fotos', ['numero'=>125]);