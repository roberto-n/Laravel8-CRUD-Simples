@extends('layouts.basico')


@section('titulo','cadastro' )

@section('conteúdo')
<div class="container">
    <form action="{{route('pet.store') }}" method="POST">
        @csrf
        <label for="nome">Nome animal </label>
        <input type="text" name="nome"> </input>
        <br>
        <label for="idade">idade</label>
        <input type="text" name="idade"></input>
        <br>
        <label for="tipo">tipo</label>
        <input type="text" name="tipo"></input>
        <br>
        <label for="raca">raça</label>
        <input type="text" name="raca"></input>
        <br>
        <label for="dono">dono</label>
        <input type="text" name="dono"></input>
        <br>
        <label for="contatodono">contato</label>
        <input type="tel" name="contatodono"></input>
        <button type="submit" value="Submit">cadastrar</button>
    </form>
</div>
@endsection