<h1>💡Keepinho</h1>
<p>Seja bem vindo ao Keepinho, o seu assistente pessoal (Melhor do que o Google).</p>

<form action="{{ route('keep.gravar') }}" method="post">
    @csrf
    <input type="text" name="titulo">
    <br>
    <textarea name="texto" cols="30" rows="10"></textarea>
    <br>
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
@endforeach