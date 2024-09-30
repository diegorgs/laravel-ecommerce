@extends('site.layout')
@section('conteudo')

    <div class="container-fluid row d-flex justify-content-center my-3">
        @foreach ($produtos as $produto)              
            <div class="card col-md-4" style="width: 18rem;">  
                <img src="{{ url("$produto->imagem")}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{Str::limit($produto->nome, 20)}}</h5>
                    <p class="card-text">{{Str::limit($produto->descricao, 40)}}</p>
                    <a href="{{route('site.details', $produto->slug)}}" class="btn btn-primary">Go somewhere</a>
                </div>          
            </div> 
        @endforeach   
    </div>
    <div class="d-flex justify-content-center my-3">
         <div class="row">
        {{ $produtos->links('custom.pagination')}}
        </div>
    </div>
   

@endsection