<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Darryldecode\Cart\Facades\CartFacade as Cart;

class CarrinhoController extends Controller
{
    public function carrinhoLista(){
        $itens = \Cart::getContent();
        return view('site.carrinho', compact('itens'));
    }
    public function adicionarCarrinho(Request $request){
        \Cart::add([
            'id'=>$request->id,
            'name'=>$request->name,
            'price'=>$request->price,
            'quantity'=>abs($request->qnt),
            'attributes'=>array(
                'image'=>$request->image
            ),
        ]);

        return redirect()->route('site.carrinho')->with('sucesso', 'Produto adicionado com sucesso!');
    }
    public function removerCarrinho(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('site.carrinho')->with('aviso', 'Produto removido do seu carrinho!');
    }
    public function atualizarCarrinho(Request $request){
        \Cart::update($request->id,[
            'quantity'=>[
                'relative'=>false,
                'value' => abs($request->quantity),
            ],
        ]);
        return redirect()->route('site.carrinho')->with('sucesso', 'Seu produto foi atualizado com sucesso');    
    }
    public function limparCarrinho(){
        \Cart::clear();
        return redirect()->route('site.carrinho')->with('aviso', 'Seu carrinho esta vazio!');
    }
}
