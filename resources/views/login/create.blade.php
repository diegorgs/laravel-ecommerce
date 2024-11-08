
@if($errors->any())
    @foreach($errors->any() as $error)
    {{$error}} <br>
    @endforeach
@endif

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
     
</head>
    <body>
            <h1>Cadastro</h1>
            <form action="{{ route('users.store')}}" method="post">
                @csrf
                <div>
                    <input id="firstName" name="firstName" type="text">
                    <label>Nome</label>
                </div>
                <div>
                    <input id="lastName" name="lastName" type="text">
                    <label>Sobrenome</label>
                </div>        
                <div>
                    <input id="email" name="email" type="email">
                    <label>Email</label>
                </div>        
                <div >
                    <input id="password" name="password" type="password">
                    <label>Senha</label>
                </div>
                    <button type="submit">Cadastrar</button> 
            </form> 
    </body>
</html>