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
		$comboClientes = [];
		$clientes = Cliente::get(['id','razon_social'])->toArray();
		foreach($clientes as $cliente) {
			$comboClientes+=[
				$cliente['id']=>$cliente['razon_social']
			];
		}

		$politicas = PoliticaPrecio::with('producto')
			->where('id_cliente',8)
			->groupBy('id_producto')
			->get(['id_producto'])
			->lists('producto','id_producto');

		$productos = [];
		foreach($politicas as $idPolitica=>$producto) $productos[$idPolitica] = $producto->producto;

		return View::make('servicios.create')->with([
			'comboClientes'=>$comboClientes,
			'productos'=>$productos,
		]);
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

		$servicios = Servicio::remember(1)->with('cliente')->get(['id','id_cliente'])->toArray();
		$data = array('data' => $servicios);

		return $data;

	}

}