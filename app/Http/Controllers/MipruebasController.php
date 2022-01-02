<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\miprueba;

class MipruebasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pruebas = miprueba::orderBy('id', 'desc')->paginate(10);
        return view('prueba.index', ['pruebas'=>$pruebas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pruebas = new miprueba();
        return view('prueba.create', ['pruebas'=>$pruebas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->habilidades=='PHP'||$request->habilidades=='HTML'||$request->habilidades=='CSS'||$request->habilidades=='Laravel'||$request->habilidades=='Java'||$request->habilidades=='JS'||$request->habilidades=='Angular'||$request->habilidades=='Node'||$request->habilidades=='Linux'||$request->habilidades=='Servidores'||$request->habilidades==null){
        $this->validate($request,[
            'nombre'=>'required|alpha_spaces|max:255',
            'apellido'=>'required|alpha_spaces|max:255',
            'edad'=>'required|numeric',
            'email'=>'required|email|unique:mipruebas|max:255',
            'habilidades'=>'required|alpha_spaces',
        ]);
        $prueba = new miprueba();
        $prueba->nombre = $request->nombre;
        $prueba->apellido = $request->apellido;
        $prueba->edad = $request->edad;
        $prueba->email = $request->email;
        $prueba->habilidades = $request->habilidades;
        $prueba->save();
        return redirect()->route('prueba.index')->with('success','Datos guardados con éxito');


    }else{
        return redirect()->route('prueba.create')->with('error','¡ERROR! Se intento ingresar una habilidad que no se encuentra en la lista.');
    }

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
