<?php

namespace App\Http\Controllers;

use App\trabajadores;
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
        return redirect('agrHerramienta')->with('status','trabajador registrada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\trabajadores  $trabajadores
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\trabajadores  $trabajadores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\trabajadores  $trabajadores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\trabajadores  $trabajadores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        trabajadores::destroy($id);
        return redirect('delHer')->with('status','Se elimino con exito');
    }
}
