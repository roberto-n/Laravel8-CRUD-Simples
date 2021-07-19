@extends('layouts.basico')

@section('titulo','pesquisar' )

@section('conteúdo')

<div class="container">
    <form action="{{route('pet.index')}}" method="get">
        @csrf
        <label for="nome">Nome animal </label>
        <input type="text" name="nome"> </input>
        <br>
        <button type="submit" value="Submit">Pesquisa</button>
    </form>
</div>
</body>

</html>
@endsection