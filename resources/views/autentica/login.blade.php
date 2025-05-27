<h1>Usuários</h1>
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

<form action="{{ route('autentica.login') }}" method="post">
    @csrf
    <input type="text" name="email" placeholder="Email" value="{{ old('email') }}">
    <br>
    <input type="password" name="password" placeholder="Senha">
    <br>
    <button type="submit">Login</button>
</form>