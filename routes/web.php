<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
|
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource("contato","ContatoController");
Route::get("mensagem","ContatoController@mensagem");
Route::get("/","AparecidaController@index");
Route::resource("home","AparecidaController");
Route::resource("jornal","MaterController");
Route::resource("pastorais","PastoralController");
Route::resource("movimentos","MovimentoController");
Route::view("capela","capela");
Route::view("casamentos","casamentos");
Route::view("batizados","batizados");
Route::view("creche","creche");
Route::view("associacao","associacao");

Route::view("acolhida","acolhida");
Route::view("batismo","batismo");
Route::view("catequese","catequese");
Route::view("crisma","crisma");
Route::view("dizimo","dizimo");
Route::view("liturgia","liturgia");
Route::view("musica","musica");
Route::view("pascom","pascom");
Route::view("saojose","saojose");
Route::view("saude","saude");
Route::view("apostolado","apostolado");
Route::view("ecc","ecc");
Route::view("irmandade","irmandade");
Route::view("legiao","legiao");
Route::view("oficina","oficina");
Route::view("renovacao","renovacao");
Route::view("tercohomens","tercohomens");
Route::view("totus","totus");
Route::view("vicentinos","vicentinos");
Route::view("jovens","jovens");