<?php

class ServiciosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /clietes
	 *
	 * @return Response
	 */
	public function index()
	{
		dd(Servicio::all()->toArray());
		return View::make('servicios.listado');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /clietes/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('servicios.create');
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
		$servicio = new Servicio();
		$servicio->fill($data);
		$servicio->save();

		return Redirect::route('servicios.index');
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
		return Servicio::find($id);
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
		$servicio = Servicio::find($id);

		return View::make('servicios.edit',compact('servicio'));
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
		$servicio = Servicio::find($id);
		$servicio->update($data);

		return Redirect::route('servicios.index');
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

		//

	}

}