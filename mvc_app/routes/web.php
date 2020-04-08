<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/avisos', function () {
    return view('avisos', ['nome' => 'Emerson', 'mostrar' => true, 'avisos' =>
	[['id' => 1, 'texto' => 'Aviso 1']
	,['id' => 2, 'texto' => 'Aviso 2']]]);
});

Route::get('/pagina1', function () {
    return view('pagina1');
});


// Aula 09
Route::get('/admin', function () {
    return view('admin/index');
});

Route::get('/categoria', function ()
{
    return view('admin/categoria',
    ['campos' =>
        [
            ['id' => 1, 'nome' => 'Mega-Drive'],
            ['id' => 2, 'nome' => 'Super nintendo'],
            ['id' => 3, 'nome' => 'Sega saturn'],
            ['id' => 4, 'nome' => 'Nintendo 64'],
            ['id' => 5, 'nome' => 'Playstation'],
            ['id' => 6, 'nome' => 'Playstation 2'],
            ['id' => 6, 'nome' => 'Xbox'],
            ['id' => 7, 'nome' => 'Nintedo 3DS'],
            ['id' => 8, 'nome' => 'Ps Vita'],
            ['id' => 6, 'nome' => 'Game boy Advance'],
        ]
    ]);
});
