<?php

namespace App\Http\Controllers;

use App\Credenciada;
use App\Licenca;
use Illuminate\Http\Request;
use LicencaSeeder;

class LicencaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
      $licencas = Licenca::all();
      return view('licenca.index',compact('licencas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('licenca.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
   {
      $credenciada = Credenciada::where('cnpj',$request->cnpj)->first();

      $licenca = new Licenca();
      $licenca->data_licenciamento = $request->data_licenciamento;
      $licenca->data_vencimento = $request->data_vencimento;
      $licenca->cnpj = $request->cnpj;
      $licenca->id_credenciada = $credenciada->id;
      $licenca->save();
      return redirect('licencas');

   }

   /**
     * Display the specified resource.
     *
     * @param  \App\Licenca  $licenca
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $licenca = Licenca::findOrFail($id);
        return view('licenca.show',compact('licenca'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Licenca  $licenca
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
       $licenca = Licenca::findOrFail($request->id);
        return view('licenca.edit',compact('licenca'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Licenca  $licenca
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
      $licenca = Licenca::findOrFail($id);
      $licenca->cnpj = $request->cnpj;
      $licenca->data_licenciamento = $request->data_licenciamento;
      $licenca->data_vencimento = $request->data_vencimento;
      $licenca->save();
      return redirect('licencas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Licenca  $licenca
     * @return \Illuminate\Http\Response
     */
    public function destroy(Licenca $licenca)
    {
        //
    }

    //
    public function setStatus(Request $request){
      $licenca = Licenca::findOrFail($request->id);
      if($licenca->ativo == true){
         $licenca->ativo = false;
      }else{
         $licenca->ativo = true;
      }
      $licenca->save();
      return redirect()->back();
   }

   public function formRevog(){
      return view('licenca.revogacao');
   }

   public function getLicencas(Request $request){
      $licencas = Licenca::where('cnpj',$request->cnpj)->get();
      return view('licenca.licencas-revogacao',compact('licencas'));
   }
   
}
