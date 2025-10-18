<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;

class SGEcontroller extends Controller
{
    public function index(){
        $clientes = Cliente::all();
        return view('clientes.index', ['clientes'=>$clientes]);
    }
    
    public function create(){
        return view('clientes.create');
    }

    public function store(Request $request){
        Cliente::create($request->all());
        return redirect()->route('clientes-index');
    }

    public function edit($id){
        $clientes = cliente::where('id',$id)->first();
        if(!empty($clientes)){
            return view('clientes.edit', ['clientes'=>$clientes]);
        } else {
            return redirect()->route('clientes-index');
        }
    }

     public function update(Request $request, $id){
        $data = [
            'nome' => $request->nome,
            'sobrenome' => $request->sobrenome,
            'email' => $request->email,
            'celular' => $request->celular,

        ];
        cliente::where('id',$id)->update($data);
        return redirect()->route('Clientes-index');
    }

    public function destroy($id){
        cliente::where('id',$id)->delete();
        return redirect()->route('Clientes-index');
    }


}

