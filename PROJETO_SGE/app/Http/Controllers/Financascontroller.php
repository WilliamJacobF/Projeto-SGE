<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Financia;
use Illuminate\Http\Request;

class Financascontroller extends Controller
{
    public function index(){
        $financias = Financia::all();
        return view('financias.index', ['financias'=>$financias]);
    }
    
    public function create(){
        return view('financias.create');
    }

    public function store(Request $request){
        $validacao = $request->validate([
            'descricao' => 'required',
            'tipo' => 'required',
            'valor' => 'required',
            'data_de_pagamento' => 'required'
        ]);
        Financia::create($request->all());
        return redirect()->route('financias-index');
    }

    public function edit($id){
        $financias = Financia::where('id',$id)->first();
        if(!empty($financias)){
            return view('financias.edit', ['financias'=>$financias]);
        } else {
            return redirect()->route('financias-index');
        }
    }

     public function update(Request $request, $id){
        $data = [
            'descricao' => $request->descricao,
            'tipo' => $request->tipo,
            'valor' => $request->valor,
            'data_de_pagamento' => $request->data_de_pagamento,

        ];
        Financia::where('id',$id)->update($data);
        return redirect()->route('financias-index');
    }

    public function destroy($id){
        Financia::where('id',$id)->delete();
        return redirect()->route('financias-index');
    }
}
