<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;


class ProdutoController extends Controller
{
    public function index(Request $request)
    {   
        
        $produtos = Produto::all();
        return view('produto.index', compact('produtos'));
    }

    public function create()
    {
        return view('produto.create');
    }

    public function store(Request $request)
    {
        $produto = new Produto;
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->save();
        
        $this->validate($request, [
            'nome' => 'required',
            'descricao' => 'required',
            'preco' => 'required|numeric',
        ]);
        return redirect()->route('produto.index')->with('message', 'Produto cadastrado com sucesso!');
    }

    public function edit($id)
    {
        $produto = Produto::where('id',$id)->first();
        if(!empty($produto))
        {
        //return view('produto.edit', compact('produto'));
        return view('produto.edit', compact('produto'));
         }
         else{
            return redirect()->route('produto.index');
         }
    }

    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->preco = $request->preco;
        $produto->save();

       
        return redirect()->route('produto.index')->with('message', 'Produto atualizado com sucesso!');
    }

    public function destroy($id)
    {
         $produto = Produto::findOrFail($id);
         $produto->delete();

         return redirect('/produto')->with('message', 'Produto excluído com sucesso!');
        
    }



}