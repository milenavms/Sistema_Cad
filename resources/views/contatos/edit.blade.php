@extends('layout')

@section('conteudo')

<form class="form-horizontal" action="{{ route('contatos.update', $contato->id) }}"  method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
<fieldset>
<div class="panel panel-primary">
    <div class="panel-heading">Atualizar dados</div>    
    <div class="panel-body">

<!-- Nome -->
<div class="form-group">
  <label class="col-md-2 control-label" for="nome">Nome</label>  
  <div class="col-md-8">
  <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text" value={{  $contato->nome }}>
  </div>
</div>
<!-- Telefone -->
<div class="form-group">
  <label class="col-md-2 control-label" for="fone">Telefone</label>
  <div class="col-md-5">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      <input id="fone" name="telefone" class="form-control"  required="" type="text" value={{  $contato->telefone }} maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
      OnKeyPress="formatar('## #####-####', this)">
    </div>
  </div>
 </div>
<!-- Email-->
<div class="form-group">
  <label class="col-md-2 control-label" for="email"> Email</label>
  <div class="col-md-5">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input id="email" name="email" class="form-control" value={{  $contato->email }} required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
    </div>
  </div>
</div>
<!-- Imagem-->
<div class="form-group">
  <label class="col-md-2 control-label" for="imagem"> Imagem de Perfil</label>
  <div class="col-md-5">
    <div class="input-group">
      <input type="file" class="form-control-file" id="imagem" name="image" value={{  $contato->image }}>
       </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-2 control-label" for="Cadastrar"></label>
  <div class="col-md-8">
    <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Atualizar</button>
    <a id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset" href="{{ route('contatos.index') }}">Cancelar</a>
  </div>
</div>

</fieldset>
</form>


@endsection