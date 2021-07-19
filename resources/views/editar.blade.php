@extends('layouts.basico')


@section('titulo','editar' )

@section('conteúdo')
 
<div class= "container">
 <form action="{{route('pet.update',$pet->id)}}" method="post">
    @csrf
    @method('PUT')
    
    <label for="nome">Nome antigo:{{$pet->nome}} </label>
    <input type="text" name="nome"> </input>
    <br>
    <label for="idade">Idade antigo:{{$pet->idade}}</label>
    <input type="text" name="idade"></input>
    <br>
    <label for="tipo">Tipo antigo:{{$pet->tipo}}</label>
    <input type="text" name="tipo"></input>
    <br>  
    <label for="raca">Raça antigo:{{$pet->raca}}</label>
    <input type="text" name="raca"></input>
    <br>
    <label for="dono">Dono antigo:{{$pet->dono}}</label>
    <input type="text" name="dono"></input>
    <br>
    <label for="contatodono">Contato antigo:{{$pet->contatodono}}</label>
    <input type="tel" name="contatodono"></input>
    <button type="submit" value="Submit" >editar</button>
 </form>
</div>
 @endsection