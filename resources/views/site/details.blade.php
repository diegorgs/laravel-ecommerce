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
            <form action="{{route('site.addCarrinho')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$produto->id}}">
                <input type="hidden" name="name"value="{{$produto->nome}}">
                <input type="hidden" name="price" value="{{$produto->preco}}">
                <input type="number" name="qnt" min="1" value="1">
                <input type="hidden" name="image" value="{{$produto->imagem}}">
                <button class="btn btn-success">Comprar</button>
            </form>
        </div>
    </div>

@endsection