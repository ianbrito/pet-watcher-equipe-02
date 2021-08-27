<?php

namespace App\Http\Controllers;

use App\Animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use \App\Http\Controllers\ProprietarioController;
use App\Proprietario;
use \App\Http\Controllers\CredenciadaController;
use App\Credenciada;
use Illuminate\Support\Facades\Auth;


class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animais = Animal::all();
        return view('animal.index', compact('animais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('animal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $microship = Animal::select('microship')->where('microship', $request->microship)->get();
        $proprietario = Proprietario::findOrFail($request->proprietario_id);

        if(!$proprietario->id || count($microship) > 0) {
            return redirect('animal');
        }

        $animal = new Animal();
        $animal->tipo_aquisicao = $request->tipo_aquisicao;
        $animal->proprietario_id = $request->proprietario_id;
        $animal->nome = $request->nome;
        $animal->microship = $request->microship;
        $animal->especie = $request->especie;
        $animal->data_nascimento = $request->data_nascimento;
        $animal->fase = $request->fase;
        $animal->porte = $request->porte;
        $animal->sexo = $request->sexo;
        $animal->pedigree = $request->pedigree;
        $animal->codigo_pedigree = $request->codigo_pedigree;
        $animal->origem_pedigree = $request->origem_pedigree;
        $animal->credenciada_id = Auth::id();
        $animal->save();
        return redirect('animal');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $animal = Animal::findOrFail($id);
        return view('animal.show',compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $animal = Animal::findOrFail($id);
        return view('animal.edit',compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $animal = Animal::findOrFail($id);
        $animal->tipo_aquisicao = $request->tipo_aquisicao;
        $animal->proprietario_id = $request->proprietario_id;
        $animal->nome = $request->nome;
        $animal->microship = $request->microship;
        $animal->pedigree = $request->pedigree;
        $animal->especie = $request->especie;
        $animal->data_nascimento = $request->data_nascimento;
        $animal->fase = $request->fase;
        $animal->porte = $request->porte;
        $animal->sexo = $request->sexo;
        $animal->pedigree = $request->pedigree;
        $animal->codigo_pedigree = $request->codigo_pedigree;
        $animal->origem_pedigree = $request->origem_pedigree;
        $animal->save();
        return redirect('animal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Animal  $animal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Animal::findOrFail($id)->delete();
        return redirect('animal');
    }
}
