<h1>💡Keepinho</h1>
<p>Seja bem vindo ao Keepinho, o seu assistente pessoal (Melhor do que o Google).</p>
<hr>
<a href="{{ route('keep.lixeira') }}">🗑️ Lixeira</a>
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

<form action="{{ route('keep.gravar') }}" method="post">
    @csrf
    <input type="text" name="titulo" value="{{ old('titulo') }}">
    <br><br>
    <textarea name="texto" cols="30" rows="10">{{ old('texto') }}</textarea>
    <br><br>
    <button type="submit">Salvar</button>
</form>


@foreach ($notas as $nota)
    <div style="border:1px dashed green">
        {{ $nota->titulo }}
        <br>
        {{ $nota->texto }}
        <br>
        <a href="{{ route('keep.editar', $nota->id) }}">Editar</a>

        <form action="{{ route('keep.apagar', $nota->id) }}" method="POST">
            @method('delete')
            @csrf
            <button type="submit">Apagar</button>
        </form>
    </div>
    <br>
@endforeach