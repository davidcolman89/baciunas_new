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

        $politicaPeso = new PoliticaPrecio();
        $politicaPeso->fill($data);
        $politicaPeso->save();
        $idPoliticaPrecio = $politicaPeso->id;

        foreach($politicasCantidad as $item)
        {
            $politicaCantidad = new PoliticaCantidad();
            $politicaCantidad->fill([
                'id_politica_precio'=>$idPoliticaPrecio,
                'cantidad'=>$item['cantidad'],
                'cuota'=>$item['cuota'],
            ]);
            $politicaCantidad->save();
        }

        foreach($politicasPeso as $item)
        {
            $politicaPeso = new PoliticaPeso();
            $politicaPeso->fill([
                'id_politica_precio'=>$idPoliticaPrecio,
                'cantidad'=>$item['cantidad'],
                'cuota'=>$item['cuota'],
            ]);
            $politicaPeso->save();
        }

        return Redirect::route('politicasPrecio.index');
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
        return PoliticaPrecio::find($id);
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
        $politicaPrecio = PoliticaPrecio::find($id);

        return View::make('politicasPrecio.edit',compact('politicaPrecio'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /politicasprecio/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $data = Input::all();
        $politicaPrecio = PoliticaPrecio::find($id);
        $politicaPrecio->update($data);

        return Redirect::route('politicasPrecio.index');
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
		//
	}

    public function showAll()
    {

        #$politicaPrecio = PoliticaPrecio::remember(1)->with('cliente')->get(['id'])->toArray();

        $data = array('data' => $politicaPrecio);

        return $data;

    }

    public function getPoliticasByCliente($idCliente)
    {
        return $politicaPrecio = [
            [
                'producto'=>'M1',
                'cliente'=>'NOMASGOT S.R.L (W)',
                'frecuencia'=>'LLAMAM',
                'cantidad'=>'$1,00',
                'abono'=>'True',
            ],[
                'producto'=>'AG M5',
                'cliente'=>'NOMASGOT S.R.L (W)',
                'frecuencia'=>'esporadico',
                'cantidad'=>'-',
                'abono'=>'True',
            ],[
                'producto'=>'R.ESP',
                'cliente'=>'NOMASGOT S.R.L (W)',
                'frecuencia'=>'LOS 25 DE CADA',
                'cantidad'=>'-',
                'abono'=>'True',
            ],[
                'producto'=>'FLETE',
                'cliente'=>'NOMASGOT S.R.L (W)',
                'frecuencia'=>'LOS 25 DE CADA',
                'cantidad'=>'-',
                'abono'=>'True',
            ],[
                'producto'=>'asdasd',
                'cliente'=>'NOMASGOT S.R.L (W)',
                'frecuencia'=>'LOS 25 DE CADA',
                'cantidad'=>'-',
                'abono'=>'True',
            ]
        ];
    }

}