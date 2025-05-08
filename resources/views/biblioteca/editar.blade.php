<h1>Biblioteca</h1>

<form method="post" action="{{ route('biblioteca.editarGravar') }}">
    @method('PUT')
    @csrf
    <input type="hidden" name="id" value="{{ $livros->id }}">
    Título:
    <input type="text" name="titulo" id="titulo" placeholder="{{ $livros->titulo }}">
    <br>
    Autor:
    <input type="text" name="autor" id="autor" value="{{ $livros->autor }}">
    <br>
    ISBN:
    <input type="number" name="ISBN" id="ISBN" value="{{ $livros->ISBN }}">
    <br>
    Data de publicação:
    <input type="date" name="data_publicacao" id="data_publicacao" value="{{ $livros->data_publicacao }}">
    <br>
    <button type="submit">Editar livro</button>
</form>