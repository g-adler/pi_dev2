@extends('layout')

@section('heading', 'Dados pessoais')

@section('content')
<form style="margin:25px">
  <div class="form-row col-md-8 col-md-offset-2">
    <div class="form-group col-md-4">
      <label for="inputEmail4">Nome</label>
      <input type="text" class="form-control">
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">CPF</label>
      <input type="number" class="form-control" placeholder="XXX.XXX.XXX-XX">
    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress">Maior Titulação</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress">Área de Formação</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress">Currículo Lattes (link)</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress">Data de Atualização</label>
      <input type="text" class="form-control"  >
    </div>
  </div>
  <div class="col-md-4 col-md-offset-6">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>
@endsection
