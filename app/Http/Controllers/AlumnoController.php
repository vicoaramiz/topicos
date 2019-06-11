<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;



class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $padre=\Auth::user();
        $alumnos=$padre->alumnos;
        return view('alumno.index',compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $alumnos=new Alumno();
        return view('alumno.create',compact('alumno'));
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
     * Display the Licesnse from specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function licencia($id)
    {
        $alumno=Alumno::find($id);
        //dd($alumno->licencias);
        //dd($alumno->licencias->first()->alumno);
        $licencias=$alumno->licencias;
        return view('alumno.licencia',compact('licencias','alumno'));
    }
    public function crear_licencia($id)
    {
        $alumno=Alumno::find($id);
        return view('alumno.crear-licencia');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
