<?php

class ServiciosController extends \BaseController {

	private $rules = array(
		'id_producto'          	=> 'required',
		'id_estado'            	=> 'required',
		'fecha_servicio'       	=> 'required',
		'contenedores'       	=> 'required',
		'kilos'       			=> 'required',
		'direccion'       		=> 'required',
		'numero_manifiesto'     => 'required',
		'numero_cr'       		=> 'required',
	);

	private $messages = array(
		'required' => 'El :attribute no puede estar vacio.',
	);


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

	public function create()
	{
		$clientes = Cliente::orderBy('razon_social')->lists('razon_social','id');
		$estados = [
			1=>'estado 1',
			2=>'estado 2',
			3=>'estado 3',
		];
		return View::make('servicios.create')->with(compact('clientes','estados'));
	}

	public function store()
	{
		$data = Input::all();
		$validator = Validator::make($data, $this->rules, $this->messages);

		if($validator->fails()){
			$messages = $validator->messages();
			return Redirect::back()->withErrors($validator)->withInput();
		}else{
			$servicio = new Servicio();
			$servicio->fill($data);
			$servicio->save();

			return Redirect::route('servicios.index');
		}

	}

	public function show($id)
	{
		return Servicio::find($id);
	}

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