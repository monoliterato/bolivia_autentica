<?php

namespace App\Http\Controllers;


use App\Models\Paquete;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;


class PaqueteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paquetes = Paquete::all();
        return view('index')->with('paquetes',$paquetes);

        //
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
        $paquetes=new Paquete();
        $paquetes->codigo = $request->get('codigo');


        $paquetes->save();
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
    public function edit($id_paquete)
    {
        $paquete=Paquete::find($id_paquete);
        return view()->with('paquete',$paquete);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_paquete)
    {
        $paquete=Paquete::find($id_paquete);
        $paquete->codigo=$request->get('codigo');
        $paquete->save();
        return redirect();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_paquete)
    {
        $paquete=Paquete::find($id_paquete);
        $paquete->delete();
        return redirect();
    }
}
