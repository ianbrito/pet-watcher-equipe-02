<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
   {    
      if(auth()->user()->tipo_conta == '1'){
         return view('user.adm.home-adm');
      }elseif(auth()->user()->tipo_conta == '2'){
         return view('user.cred.home-cred');
      }elseif(auth()->user()->tipo_conta == '3'){
         return view('user.func.home-func');
      }
   }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function create()
   {
      
   }

   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
   {

   }

   /**
     * Display the specified resource.
     *
     * @param  \App\Credenciada  $credenciada
     * @return \Illuminate\Http\Response
     */
   public function show($id)
   { 

   }

   /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Credenciada  $credenciada
     * @return \Illuminate\Http\Response
     */
   public function edit($id)
   {

   }

   /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Credenciada  $credenciada
     * @return \Illuminate\Http\Response
     */
   public function update(Request $request, $id)
   {

   }

   /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Credenciada  $credenciada
     * @return \Illuminate\Http\Response
     */
   public function destroy()
   {
        //
   }

}
