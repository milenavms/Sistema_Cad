@extends('layout')


@section('conteudo')
<div class="panel panel-primary">
<div class="panel-heading">
    Listagem de Contatos
</div>
<div class="panel-body">
<div class="container">
	<div class="row">
    <div class="col-md-12">
    <div class="table-responsive">
    <table id="mytable" class="table table-bordred table-striped">
      <thead>
      <th></th>
      <th>Nome</th>
      <th>Telefone</th>
      <th>Email</th>
      <th>Edit</th>
      <th>Delete</th>
    </thead>
    <tbody>
    @foreach($contatos as $contato)
    <tr>
    <td><img src="{{ asset('storage/images/' . $contato->image)}}" width="50px"  heigth="50px" alt="image"/></td>
    <td>{{ $contato->nome }} </td>
    <td>{{ $contato->telefone }}</td>
    <td>{{ $contato->email }}</td>
    <td><a href="{{ route('contatos.edit', $contato->id) }}"> <button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button> </a></td>
    <td><a href="{{ route('contatos.destroy', $contato->id) }}"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></a></td>
    </tr>
    @endforeach
    </tbody>       
</table>
</div>
</div>
</div>
</div>

@endsection
