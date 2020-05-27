<?php

namespace App\Http\Controllers\Herramientas;

use App\herramientas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HerramientasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Herramientas.ver');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Herramientas.agregar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agrearHerramienta= request()->except('_token');
        herramientas::insert($agrearHerramienta);
        return redirect('agrHerramienta')->with('status','Herramienta  registrada con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $herramientas=herramientas::findOrFail($id);
        return view('Herramientas.edit', compact('herramientas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $agrearHerramienta= request()->except(['_token','_method']);
        herramientas::where('id','=',$id)->update($agrearHerramienta);

        $herramientas=herramientas::findOrFail($id);
        return view('Herramientas.ver');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        herramientas::destroy($id);
        return redirect('delHer')->with('status','Se elimino con exito');
    }
}
