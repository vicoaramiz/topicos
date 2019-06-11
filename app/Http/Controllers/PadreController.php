<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Padre;

class PadreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $padres=Padre::all();
        return view('padre.index',compact('padres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $padres=new Padre();
        return view('padre.create',compact('padre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $padre=Padre::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $padre=Padre::find($id);
        return view('padre.edit',compact('padre'));
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
        $padre=Padre::find($id);
        $padre->nombre= $request->get('nombre');
        $padre->apellido= $request->get('apellido');
        $padre->save();
        return redirect()->route('padres.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $padre=Padre::find($id);
        $padre->nombre= $request->get('nombre');
        $padre->apellido= $request->get('apellido');
        $padre->save();
    }
}
