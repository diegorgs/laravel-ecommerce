@extends('site.layout')
@section('conteudo')
    
    {{-- <div class="container row"><br>
        @if($mensagem = Session::get('sucesso'))
        <div class="card">
        </div>
    </div> --}}
    <div class="d-flex justify-content-center">
        <div class="row container">
            @if($itens->count() == 0)
            <div class="p-4  d-flex justify-content-center my-4 bg-warning">
                <h3 class="text-white">Seu carrinho esta vazio!</h3>
            </div>
            @else
                <h3 class="my-4">Seu carrinho possui {{$itens->count()}} produtos!</h3>    
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
                                <td><img src="{{url("{$item->attributes->image}")}}" class="rounded-4 ms-2" width="50" height="50"  alt=""></td>
                                <td >{{$item->name}}</td>
                                <td>R$ {{number_format($item->price, 2, ',', '.')}}</td>
                                
                                <form action="{{route('site.atualizarCarrinho')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$item->id}}">
                                    <td><input style="width:40px; font-weight:900;" min="1" type="number" name="quantity" value="{{$item->quantity}}"></td>
                                    <td>
                                        <button class="btn btn-warning rounded-5"><i class="text-white bi bi-arrow-clockwise"></i></button>
                                
                                </form>
                                        <form action="{{route('site.removerCarrinho')}}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$item->id}}">
                                            <button class="btn btn-danger rounded-5"><i class="bi bi-trash"></i></button>
                                        </form>
                                    </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-4">
                        <div class="p-3 rounded-3 my-2 bg-warning">
                            <h5 class="my-2">Valor Total: </h5>
                            <h5><strong>R$ {{number_format(\Cart::getTotal(), 2, ',', '.')}} </strong></h5>
                            <p>Pague em 12x sem juros!</p>
                        </div>
                    </div>
                    <div class="col-4 d-flex align-items-center justify-content-center">
                        <button class="btn btn-success p-4 mt-2" href="#"><h2>Finalizar Pedido</h2></button>
                    </div>
                    <div class="col-4 d-flex align-items-center">
                        <div class="">
                            <a class="btn btn-primary py-3" href="{{route('site.index')}}">Continuar Comprando</a>
                            <a class="btn btn-danger py-3" href="{{route('site.limparCarrinho')}}">Limpar Carrinho</a>
                        </div>
                    </div>  
                </div>
            @endif
        </div>    
    </div>
    

@endsection