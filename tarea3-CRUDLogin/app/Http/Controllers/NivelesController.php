<?php

namespace App\Http\Controllers;

use App\Models\Nivel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class NivelesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        return view("niveles.niveles_index", ["niveles"=>Nivel::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("niveles.niveles_create");
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

        $nivel = new Nivel($request->input());
        $nivel->saveOrFail();
        return redirect()->route("niveles.index")->with(["mensaje" => "Nivel creado",
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function show(Nivel $nivel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function edit(Nivel $nivel)
    {
        //

        return view("niveles.niveles_edit", ["nivel" => $nivel,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nivel)
    {
        //
        $nivel=Nivel::findOrFail($nivel);
        $nivel->name=$request->input('name');
        $nivel->email=$request->input('email');
        $nivel->password=Hash::make($request->input('password'));

        /* Hash::make($data['password']), */
        $nivel->save(); 
        /*  $nivel->fill($request->input())->saveOrFail();  */
        return redirect()->route("niveles.index")->with(["mensaje" => "Nivel actualizado"]); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nivel  $nivel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nivel $nivel)
    {
        //
        $nivel->delete();
        return redirect()->route("niveles.index")->with(["mensaje" => "Nivel eliminado",
        ]);
    }
}
