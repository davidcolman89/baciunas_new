<?php

class ClientesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /clietes
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('clientes.listado');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /clietes/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('clientes.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /clietes
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();
		$cliente = new Cliente();
		$cliente->fill($data);
		$cliente->save();

		return Redirect::route('clientes.index');
	}

	/**
	 * Display the specified resource.
	 * GET /clietes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Cliente::find($id);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /clietes/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cliente = Cliente::find($id);

		return View::make('clientes.edit',compact('cliente'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /clietes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$data = Input::all();
		$cliente = Cliente::find($id);
		$cliente->update($data);

		return Redirect::route('clientes.index');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /clietes/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function showAll()
	{

		$clientes = Cliente::remember(1)->get(['id','razon_social'])->toArray();
		$data = array('data' => $clientes);

		return $data;

	}

}