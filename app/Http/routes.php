<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', ['as'=>'public.index', 'uses'=>'PublicController@home']);
Route::get('/sobre-Simone-Heringer', ['as'=>'public.sobre', 'uses'=>'PublicController@sobre']);
Route::get('/Simone-Heringer-portfolio-Design-de-Ambientes', ['as'=>'public.portfolio', 'uses'=>'PublicController@portfolio']);
Route::get('/pacotes-e-serviços-Design-de-Interiores-e-Paisagismo', ['as'=>'public.servizi', 'uses'=>'PublicController@servizi']);
Route::get('/contato-e-orçamento-Simone-Heringer', ['as'=>'public.contatti', 'uses'=>'PublicController@contatti']);
Route::get('/processo-criativo-design-de-ambientes', ['as'=>'public.processo', 'uses'=>'PublicController@processo']);

Route::get('/progetto_1', ['as'=>'public.progetto_1', 'uses'=>'PublicController@prog1']);
Route::get('/progetto_2', ['as'=>'public.progetto_2', 'uses'=>'PublicController@prog2']);
Route::get('/progetto_3', ['as'=>'public.progetto_3', 'uses'=>'PublicController@prog3']);
Route::get('/progetto_4', ['as'=>'public.progetto_4', 'uses'=>'PublicController@prog4']);
Route::get('/progetto_5', ['as'=>'public.progetto_5', 'uses'=>'PublicController@prog5']);
Route::get('/progetto_6', ['as'=>'public.progetto_6', 'uses'=>'PublicController@prog6']);
Route::get('/progetto_7', ['as'=>'public.progetto_7', 'uses'=>'PublicController@prog7']);
Route::get('/progetto_8', ['as'=>'public.progetto_8', 'uses'=>'PublicController@prog8']);
Route::get('/progetto_9', ['as'=>'public.progetto_9', 'uses'=>'PublicController@prog9']);
Route::get('/progetto_10', ['as'=>'public.progetto_10', 'uses'=>'PublicController@prog10']);
Route::get('/progetto_11', ['as'=>'public.progetto_11', 'uses'=>'PublicController@prog11']);
Route::get('/progetto_12', ['as'=>'public.progetto_12', 'uses'=>'PublicController@prog12']);
Route::get('/progetto_13', ['as'=>'public.progetto_13', 'uses'=>'PublicController@prog13']);
Route::get('/progetto_14', ['as'=>'public.progetto_14', 'uses'=>'PublicController@prog14']);
