<?php

namespace App\Http\Controllers;

use App\Calibracion\Calibracion;
use Illuminate\Http\Request;

class CalibracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Calibracion.ver');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Calibracion.agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agrearCalibracion= request()->except('_token');
        calibracion::insert($agrearCalibracion);
        return redirect('agrcalibracion')->with('status','calibracion  registrada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Calibracion\Calibracion  $calibracion
     * @return \Illuminate\Http\Response
     */
    public function show(Calibracion $calibracion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Calibracion\Calibracion  $calibracion
     * @return \Illuminate\Http\Response
     */
    public function edit(Calibracion $calibracion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Calibracion\Calibracion  $calibracion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calibracion $calibracion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Calibracion\Calibracion  $calibracion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Proveedor::destroy($id);
        return redirect('delCal')->with('status','Se elimino con exito');
    }
}
