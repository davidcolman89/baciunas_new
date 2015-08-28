<?php

class PoliticasPrecioController extends \BaseController {

    private $dias;
    private $messagesError = [];

    public function __construct()
    {
        $this->dias = [
            'lunes',
            'martes',
            'miercoles',
            'jueves',
            'viernes',
            'sabado',
            'domingo'
        ];
    }

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
        #$frecuencias = PoliticaPrecioFrecuencias::orderBy('frecuencia')->lists('frecuencia','id');
        return View::make('politicasPrecio.create')->with(compact('clientes','frecuencias'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /politicasprecio
	 *
	 * @return Response
	 */
	public function store()
	{
        $data = $this->prepareData();
        if($this->validateData($data)){
            $this->generatePoliticaDePrecio($data);
            return Redirect::route('politicasPrecio.create');
        }else{
            return Redirect::back()->with('messagesError', $this->messagesError)->withInput();
        }
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

        list($data, $politicasCantidad, $politicasPeso) = $this->prepareData();

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
        $politicaPrecio = PoliticaPrecio::with('cliente','producto')->where('id_cliente',$idCliente)->get()->toArray();
        return ['data' => $politicaPrecio];
    }

    /**
     * @param $politicasCantidad
     * @param $idPoliticaPrecio
     * @return mixed
     */
    private function generatePoliticasDeCantidad($politicasCantidad, $idPoliticaPrecio)
    {
        foreach ($politicasCantidad as $politica) {
            $politicaCantidad = new PoliticaCantidad();
            $politicaCantidad->fill([
                'id_politica_precio' => $idPoliticaPrecio,
                'cantidad' => $politica['cantidad'],
                'cuota' => $politica['cuota'],
            ]);
            $politicaCantidad->save();
        }

        return $this;
    }

    /**
     * @param $politicasPeso
     * @param $idPoliticaPrecio
     * @return $this
     */
    private function generatePoliticasDePrecio($politicasPeso, $idPoliticaPrecio)
    {
        foreach ($politicasPeso as $politica) {
            $politicaPeso = new PoliticaPeso();
            $politicaPeso->fill([
                'id_politica_precio' => $idPoliticaPrecio,
                'cantidad' => $politica['cantidad'],
                'cuota' => $politica['cuota'],
            ]);
            $politicaPeso->save();
        }
        return $this;
    }

    /**
     * @return array
     */
    private function prepareData()
    {
        $data = Input::all();
        return $data;
    }

    /**
     * @param $data
     * @return mixed
     */
    private function generatePoliticaDePrecio($data)
    {
        $politicaPrecio = new PoliticaPrecio();
        $politicaPrecio->fill($data);
        $politicaPrecio->save();

        return $politicaPrecio->id;
    }

    private function validateData($data)
    {
        return $this->validateUniqueAbonoMensual($data);
    }

    private function validateUniqueAbonoMensual($data)
    {
        $idCliente = $data['id_cliente'];
        $existeAbono = $this->chequearAbonoExistente($idCliente);
        $abono = false;
        if(isset($data['abono'])) $abono = (bool)$data['abono'];

        if($abono && $existeAbono){
            array_push($this->messagesError,'Ya existe una politica con abono mensual');
            return false;
        }

        return true;
    }

    private function chequearAbonoExistente($idCliente)
    {
        $politicas = PoliticaPrecio::where('id_cliente',$idCliente)->get();
        foreach($politicas as $politica) if((bool)$politica->abono === true) return true;
        return false;
    }

    public function getProductosByCliente($idCliente)
    {
        $response = [];
        $idsProductos = PoliticaPrecio::where('id_cliente',$idCliente)
            ->groupBy('id_producto')
            ->lists('id_producto');
        $productos = Producto::find($idsProductos)->lists('producto','id');;

        foreach($productos as $id=>$producto){
            $response[] = [
                'id'=>$id,
                'text'=>$producto,
            ];
        }

        return $response;
    }

}