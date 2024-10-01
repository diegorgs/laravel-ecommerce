@extends('site.layout')
@section('conteudo')
    
    {{-- <div class="container row"><br>
        @if($mensagem = Session::get('sucesso'))
        <div class="card">
        </div>
    </div> --}}

    <h5>Seu carrinho possui: {{$itens->count()}}</h5>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Nome</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($itens as $item)
                <tr>
                    <td><img src="{{url("{$item->attributes->image}")}}" width="70" alt=""></td>
                    <td>{{$item->name}}</td>
                    <td>R$ {{number_format($item->preco, 2, ',', '.')}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection