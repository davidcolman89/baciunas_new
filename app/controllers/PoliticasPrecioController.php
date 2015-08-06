<?php

class PoliticasPrecioController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /politicasprecio
	 *
	 * @return Response
	 */
	public function index()
	{
        $politica = PoliticaPrecio::all();
        return View::make('politicas_precio.listado')->with($politica);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /politicasprecio/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $clientes = Cliente::orderBy('razon_social')->lists('razon_social','id');
        $productos = ['1'=>'M5','2'=>'R.ESP','3'=>'FLETE','4'=>'BOLSA','5'=>'AG 5'];
        $frecuencias = ['1'=>'LLAMAM','2'=>'Esporadico','3'=>'Los 25 de cada'];
        return View::make('politicasPrecio.create')->with(compact('clientes','productos','frecuencias'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /politicasprecio
	 *
	 * @return Response
	 */
	public function store()
	{
        $data = Input::all();
        $politicasCantidad = $data['politicas_cantidad'];
        $politicasPeso = $data['politicas_peso'];

        $abono = 0;
        if(!empty($data['cuota'])) $abono = 1;
        $data['abono'] = $abono;

        $politicaPrecio = new PoliticaPrecio();
        $politicaPrecio->fill($data);
        $politicaPrecio->save();
        $idPoliticaPrecio = $politicaPrecio->id;

        foreach($politicasCantidad as $politica)
        {
            $politicaCantidad = new PoliticaCantidad();
            $politicaCantidad->fill([
                'id_politica_precio'=>$idPoliticaPrecio,
                'cantidad'=>$politica['cantidad'],
                'cuota'=>$politica['cuota'],
            ]);
            $politicaCantidad->save();
        }

        foreach($politicasPeso as $politica)
        {
            $politicaPeso = new PoliticaPeso();
            $politicaPeso->fill([
                'id_politica_precio'=>$idPoliticaPrecio,
                'cantidad'=>$politica['cantidad'],
                'cuota'=>$politica['cuota'],
            ]);
            $politicaPeso->save();
        }

        return Redirect::route('politicasPrecio.create');
	}

	/**
	 * Display the specified resource.
	 * GET /politicasprecio/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return $politicaPrecio = PoliticaPrecio::with('politicasPeso','politicasCantidad')->find($id)->toArray();
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /politicasprecio/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
	}

	public function update($idPoliticaPrecio)
	{
        $data = Input::all();
        $politicasCantidad = $data['politicas_cantidad'];
        $politicasPeso = $data['politicas_peso'];

        $abono = 0;
        if(!empty($data['cuota'])) $abono = 1;
        $data['abono'] = $abono;

        $politicaPrecio = PoliticaPrecio::find($idPoliticaPrecio);
        $politicaPrecio->fill($data);
        $politicaPrecio->save();

        $index = 0;
        foreach($politicaPrecio->politicasCantidad as $politicas)
        {
            $politicas->fill($politicasCantidad[$index]);
            $politicas->save();
            $index++;
        }

        $index = 0;
        foreach($politicaPrecio->politicasPeso as $politicas)
        {
            $politicas->fill($politicasPeso[$index]);
            $politicas->save();
            $index++;
        }

        return Redirect::route('politicasPrecio.create');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /politicasprecio/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

	}

    public function showAll()
    {

    }

    public function getPoliticasByCliente($idCliente)
    {
        $politicaPrecio = PoliticaPrecio::with('cliente','producto','frecuencia')->where('id_cliente',$idCliente)->get()->toArray();
        return ['data' => $politicaPrecio];
    }

}