<?php

namespace App\Http\Controllers;

use \App\Credenciada;
use Illuminate\Http\Request;

class CredenciadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
      $credenciadas = Credenciada::all();
      dd($credenciadas);
      return view('accredited.index', compact('credenciadas'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Credenciada  $credenciada
     * @return \Illuminate\Http\Response
     */
    public function show(Credenciada $credenciada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Credenciada  $credenciada
     * @return \Illuminate\Http\Response
     */
    public function edit(Credenciada $credenciada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Credenciada  $credenciada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Credenciada $credenciada)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Credenciada  $credenciada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Credenciada $credenciada)
    {
        //
    }
}