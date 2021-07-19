@extends('layouts.basico')


@section('titulo','visualizar cadastro' )

@section('conteúdo')

<div class="container">

    <li>Nome:{{$pet->nome}}</li>
    <br>
    <li>Idade:{{$pet->idade}}</li>
    <br>
    <li>Tipo:{{$pet->tipo}}</li>
    <br>
    <li>Raça:{{$pet->raca}}</li>
    <br>
    <li>Dono:{{$pet->dono}}</li>
    <br>
    <li>Contato:{{$pet->contatodono}}</li>
    <br>

</div>
@endsection