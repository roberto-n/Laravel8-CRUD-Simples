@extends('layouts.basico')


@section('conteúdo')


<div class="container">
  <table>
    <thead>
      <tr>
        <th>Nome</th>
        <th>Idade</th>
        <th>Tipo</th>
        <th>Raça</th>
        <th>Dono</th>
        <th>Contato dono</th>
      </tr>
    </thead>
    <tbody>
      @foreach($ver as $row)
      <tr>
        <td>{{$row->nome}}</td>
        <td>{{$row->idade}}</td>
        <td>{{$row->tipo}}</td>
        <td>{{$row->raca}}</td>
        <td>{{$row->dono}}</td>
        <td>{{$row->contatodono}}</td>
        <td>
          <form action="{{route('pet.destroy',$row->id)}}" method="POST">
            <a href=" {{route('pet.show',$row->id )}}">visualizar </a>
            <a href=" {{route('pet.edit',$row->id)}}">editar </a>
            @csrf
            @method('DELETE')
            <button type="submit">DELETE</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection