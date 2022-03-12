<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/avisos', function(){
    return view('avisos', ['nome' => 'Jhow', 'mostrar' => true,
                            'avisos' => [   ['id' => 1, 'aviso' => 'Este é um aviso'],
                                            ['id' => 2, 'aviso' => 'Este é outro aviso'],
                                            ['id' => 3, 'aviso' => 'Este é mais um aviso']]]);
});

Route::get('/home', function () {
    return view('home', ['mercado' => 'Extra', 'lista' => true, 
                            'compras' => [  ['id' => 1, 'produto' => 'Carne'],
                                            ['id' => 2, 'produto' => 'Alface'],
                                            ['id' => 3, 'produto' => 'Ovo']],
                        'mercado2' => 'Americanas', 'lista2' => true,
                        'compras2' => [  ['produto' => 'Chocolate'],
                                        ['produto' => 'Leite'],
                                        ['produto' => 'Sabonete']]]);
});