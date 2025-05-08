<h1>Biblioteca</h1>

<form action="{{ route('biblioteca.gravar') }}" method="post">
    @csrf
    Título:
    <input type="text" name="titulo" id="titulo" placeholder="Título">
    <br>
    Autor:
    <input type="text" name="autor" id="autor" placeholder="Autor">
    <br>
    ISBN:
    <input type="number" name="ISBN" id="ISBN" placeholder="ISBN">
    <br>
    Data de publicação:
    <input type="date" name="data_publicacao" id="data_publicacao">
    <br>
    <button type="submit">Salvar</button>
</form>

@foreach ($livros as $livro)
    <div style="border:1px dashed green">
        Título:
        {{ $livro->titulo }}
        <br>
        Autor:
        {{ $livro->autor }}
        <br>
        ISBN:
        {{ $livro->ISBN }}
        <br>
        Data de publicação:
        {{ $livro->data_publicacao }}
        <br>
        <a href="{{ route('biblioteca.editar', $livro->id) }}">Editar</a>
    </div>
@endforeach