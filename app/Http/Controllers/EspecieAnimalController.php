<?php

namespace App\Http\Controllers;

use App\EspecieAnimal;
use Illuminate\Http\Request;

class EspecieAnimalController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $especieAnimal = EspecieAnimal::all();
        return view('especieanimal.index', compact('especieAnimal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('especieanimal.create');
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
        $especie_animal = new EspecieAnimal();
        $especie_animal->descricao = $request->descricao;
        $especie_animal->save();
        return redirect('especieanimal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EspecieAnimal  $especieAnimal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $especie_animal = EspecieAnimal::find($id);
        return view('especieanimal.show', compact('especie_animal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EspecieAnimal  $especieAnimal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $especie_animal = EspecieAnimal::find($id);
        return view('especieanimal.edit', compact('especie_animal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EspecieAnimal  $especieAnimal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $especie_animal = EspecieAnimal::find($id);
        $especie_animal->descricao = $request->descricao;
        $especie_animal->save();
        return redirect('especieanimal');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EspecieAnimal  $especieAnimal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $especie_animal = EspecieAnimal::find($id);
        $especie_animal->delete();
        return redirect('especieanimal');
    }
}
