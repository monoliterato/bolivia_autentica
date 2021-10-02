<?php

namespace App\Http\Controllers;

use App\Models\Articulo;

use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articulos=Articulo::all();
        return view('articulos')->with('articulos',$articulos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $articulos= new Articulo();
        $articulos->codigo=$request->get('codigo');
        $articulos->save();
        return redirect();

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
    public function edit($id_articulo)
    {
        $articulo=Articulo::find($id_articulo);
        return view()->with('articulo',$articulo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_articulo)
    {
        $articulo=Articulo::find($id_articulo);
        $articulo->codigo=$request->get('codigo');
        $articulo->save();
        return redirect();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_articulo)
    {
        $articulo=Articulo::find('id_articulo');
        $articulo->delete();
        return redirect();
    }
}
