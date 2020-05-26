<?php

namespace App\Http\Controllers;

use App\Trabajador\Trabajadores;
use Illuminate\Http\Request;

class TrabajadoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('trabajadores.ver');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trabajadores.agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agrearTrabajadores= request()->except('_token');
        trabajadores::insert($agrearTrabajadores);
        return redirect('agrTrabajadores')->with('status','Trabajador  registrada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trabajador\Trabajadores  $trabajadores
     * @return \Illuminate\Http\Response
     */
    public function show(Trabajadores $trabajadores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trabajador\Trabajadores  $trabajadores
     * @return \Illuminate\Http\Response
     */
    public function edit(Trabajadores $trabajadores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trabajador\Trabajadores  $trabajadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trabajadores $trabajadores)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trabajador\Trabajadores  $trabajadores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trabajadores $trabajadores)
    {
        trabajador::destroy($id);
        return redirect('delTra')->with('status','Se elimino con exito');
    }
}
