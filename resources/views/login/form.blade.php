@if($mensagem = Session::get('erro'))
{{$mensagem}}
@endif

@if($errors->any())
    @foreach($errors->any() as $error)
    {{$error}} <br>
    @endforeach
@endif

<form action="{{route('login.auth')}}" method="POST">
@csrf
    Email: <input type="email" name="email"><br>
    Senha: <input type="password" name="password"><br>
    <input type="checkbox" name="remmenber">Lembrar-me
    <button type="submit">Entrar</button>
</form>