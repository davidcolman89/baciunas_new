<?php

class ProductosController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /productos
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('productos.listado');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /productos/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$clientes = Cliente::orderBy('razon_social')->lists('razon_social','id');
		$tiposProducto = TipoProducto::all()->lists('tipo','id');
		return View::make('productos.create')->with(compact('clientes','tiposProducto'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /productos
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Input::all();

		$producto = new Producto();
		$producto->fill($data);
		$producto->save();

		return Redirect::route('productos.index');
	}

	/**
	 * Display the specified resource.
	 * GET /productos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /productos/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /productos/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /productos/{id}
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

		$politicaPrecio = Producto::with('cliente','tipoProducto')->get()->toArray();
		return ['data' => $politicaPrecio];

		return $data;

	}

}