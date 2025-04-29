<h1>💡Keepinho</h1>
<p>Seja bem vindo ao Keepinho, o seu assistente pessoal (Melhor do que o Google).</p>

<form action="{{ route('keep.gravar') }}" method="post">
    @csrf
    <textarea name="texto" cols="30" rows="10"></textarea>
    <br>
    <button type="submit">Salvar</button>
</form>


@foreach ($notas as $nota)
    <div style="border:1px dashed green">{{ $nota->texto }}</div>
@endforeach