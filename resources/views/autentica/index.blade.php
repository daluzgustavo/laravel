<h1>Usuários</h1>
@if (Auth::user())
    Olá {{ Auth::user()->name }}.
    <a href="{{ route('autentica.logout') }}">Sair</a>
    @else
    Você não está autenticado
    <a href="{{ route('autentica.login') }}">Entrar</a>
@endif
<hr>

@if ($errors->any())
    <div style="color: red;">
        <h3>Erro!</h3>
        <ul>
            @foreach($errors->all() as $err)
            <li>{{ $err }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('autentica.gravar') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}">
    <br>
    <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
    <br>
    <input type="password" name="password" placeholder="Senha">
    <br>
    <input type="password" name="password_confirmation" placeholder="Confirme a senha">
    <br>
    <button type="submit">Gravar</button>
</form>
<hr>

<ul>
@foreach ($usuarios as $user)
    <li>{{ $user->name }}</li>
@endforeach
</ul>