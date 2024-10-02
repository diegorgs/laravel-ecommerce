@extends('site.layout')
@section('conteudo')
    
    {{-- <div class="container row"><br>
        @if($mensagem = Session::get('sucesso'))
        <div class="card">
        </div>
    </div> --}}
    <div class="d-flex justify-content-center">
        <div class="row container">
            <div class="p-4  d-flex justify-content-center my-4 bg-success">
                <h3 class="text-white">Seu carrinho possui {{$itens->count()}} itens</h3>
            </div>
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
                            <td><img src="{{url("{$item->attributes->image}")}}" class="rounded-4" width="50" height="50"  alt=""></td>
                            <td >{{$item->name}}</td>
                            <td>R$ {{number_format($item->price, 2, ',', '.')}}</td>
                            
                            <form action="" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{$item->id}}">
                                <td><input style="width:40px; font-weight:900;" min="1" type="number" name="quantity" value="`{{$item->quantity}}"></td>
                            </form>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>    
    </div>
    

@endsection