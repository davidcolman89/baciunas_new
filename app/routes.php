<?php

Route::get('/', 'AuthController@showLogin');
Route::get('login', 'AuthController@showLogin');

Route::post('login', 'AuthController@postLogin');

Route::group(array('before' => 'auth'), function () {

	Route::get('logout', array('as'=>'logout','uses'=>'AuthController@logOut'));

	Route::get('home', array('as'=>'home','uses'=>'HomeController@showWelcome'));

	Route::get('clientes/productos/{idCliente}', array('as'=>'clientes.productos','uses'=>'ClientesController@getProductos'));
	Route::get('clientes/listado', array('as'=>'clientes.listado','uses'=>'ClientesController@showAll'));
	Route::resource('clientes', 'ClientesController');


	Route::get('ctasCtesCli/relaciones/{id}', array('as'=>'ctasCtesCli.relaciones','uses'=>'CtasCtesClienteController@getRelaciones'));
	Route::get('ctasCtesCli/cliente/{idCliente}', array('as'=>'ctasCtesCli.cliente','uses'=>'CtasCtesClienteController@getListado'));
	Route::get('ctasCtesCli/listado/{idCliente}', array('as'=>'ctasCtesCli.listado','uses'=>'CtasCtesClienteController@showAll'));
	Route::get('ctasCtesCli/listado', array('as'=>'ctasCtesCli.listadoCli','uses'=>'CtasCtesClienteController@showAllClientes'));
	Route::resource('ctasCtesCli', 'CtasCtesClienteController');

	Route::get('servicios/listado', array('as'=>'servicios.listado','uses'=>'ServiciosController@showAll'));
	Route::resource('servicios', 'ServiciosController');

	Route::get('politicasPrecio/listado', array('as'=>'politicasPrecio.listado','uses'=>'PoliticasPrecioController@showAll'));
	Route::get('politicasPrecio/byCliente/{idCliente}', array('as'=>'politicasPrecio.by_cliente','uses'=>'PoliticasPrecioController@getPoliticasByCliente'));
	Route::resource('politicasPrecio', 'PoliticasPrecioController');


});

Event::listen('404', function () {return Response::error('404');});
