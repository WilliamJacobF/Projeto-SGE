<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;

class Estoquecontroller extends Controller
{
    public function index(){
        $produtos = Produto::all();
        return view('produtos.index', ['produtos'=>$produtos]);
    }
    
    public function create(){
        return view('produtos.create');
    }

    public function store(Request $request){
        $validacao = $request->validate([
            'produto' => 'required',
            'codigo' => 'required',
            'data_de_recebimento' => 'required',
            'preço_unitario' => 'required'
        ]);
        Produto::create($request->all());
        return redirect()->route('produtos-index');
    }

    public function edit($id){
        $produtos = Produto::where('id',$id)->first();
        if(!empty($produtos)){
            return view('produtos.edit', ['produtos'=>$produtos]);
        } else {
            return redirect()->route('produtos-index');
        }
    }

     public function update(Request $request, $id){
        $data = [
            'produto' => $request->produto,
            'codigo' => $request->codigo,
            'data_de_recebimento' => $request->data_de_recebimento,
            'preço_unitario' => $request->preço_unitario,

        ];
        Produto::where('id',$id)->update($data);
        return redirect()->route('produtos-index');
    }

    public function destroy($id){
        Produto::where('id',$id)->delete();
        return redirect()->route('produtos-index');
    }

}
