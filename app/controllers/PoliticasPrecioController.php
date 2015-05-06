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
        return View::make('politicas_precio.listado');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /politicasprecio/create
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('politicasPrecio.create');
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
        $servicio = new PoliticaPrecio();
        $servicio->fill($data);
        $servicio->save();

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
        $politicaPrecio = [
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
                'producto'=>'BOLSA',
                'cliente'=>'NOMASGOT S.R.L (W)',
                'frecuencia'=>'LOS 25 DE CADA',
                'cantidad'=>'-',
                'abono'=>'True',
            ]
        ];
        $data = array('data' => $politicaPrecio);

        return $data;

    }

}