@extends('site.layout')
@section('conteudo')

    <div class="container row my-3">
        <div class="col-6">
            <img class="d-flex justify-content-center" src="{{ url("$produto->imagem")}}" width="400px" height="400px">
        </div>
        <div class="col-6">
            <h1>{{$produto->nome}}</h1>
            <p>{{$produto->descricao}}</p>
            <h1>R$ {{number_format($produto->preco, 2,',','.')}}</h1>
            <div class="detalhes my-4">
                <small>Postado por {{$produto->user->firstName}}</small><br>
                <small>Categoria {{$produto->categoria->nome}}</small>
            </div>
            
            <button class="btn btn-success">Comprar</button>

        </div>
    </div>

@endsection