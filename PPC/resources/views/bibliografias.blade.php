@extends('layout')

@section('heading', 'Bibliografias')

@section('content')

<div class="col-md-12">
    <div class="input-group  col-md-4 col-md-offset-4">
      <div class="input-group-prepend">
        <label class="input-group-text">Curso</label>
      </div>
      <select class="custom-select" style="width:100%" id="inputGroupSelect01">
        <option selected>Selecione...</option>
        <option value="1">Lorem</option>
        <option value="2">Ipsum</option>
        <option value="3">Dolor</option>
      </select>
    </div>
    <div class="input-group  col-md-4 col-md-offset-4">
      <div class="input-group-prepend">
        <label class="input-group-text">Disciplina</label>
      </div>
      <select class="custom-select" style="width:100%">
        <option selected>Selecione...</option>
        <option value="1">Lorem</option>
        <option value="2">Ipsum</option>
        <option value="3">Dolor</option>
      </select>
    </div>
</div>
</br></br></br>
<form>
  <div style="margin-top:25px" class="form-row col-md-6 col-md-offset-3">
    <div class="form-group col-md-6">
      <label >Título</label>
      <input type="text" class="form-control">
    </div>
    <div class="form-group col-md-6">
      <label >Autor</label>
      <input type="number" class="form-control" placeholder="XXX.XXX.XXX-XX">
    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress">ISBN</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="form-group col-md-2">
      <label for="inputAddress">Ano</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress">Editora</label>
      <input type="text" class="form-control"  >
    </div>
  </div>
  <div class="col-md-3 col-md-offset-5">
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="/"><button type="submit" class="btn btn-primary">Cancelar</button></a>
  </div>
</form>
@endsection
