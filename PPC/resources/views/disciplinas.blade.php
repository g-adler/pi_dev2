@extends('layout')

@section('heading', 'Disciplinas')

@section('content')
<form>
  <div style="margin-top:25px" class="form-row col-md-6 col-md-offset-3">
    <div class="form-group col-md-6">
      <label >Nome da Disciplina</label>
      <input type="text" class="form-control">
    </div>
    <div class="form-group col-md-6">
      <label >Descrição</label>
      <input type="text" class="form-control">
    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress">Código da Disciplina</label>
      <input type="text" class="form-control">
    </div>
    <div class="form-group col-md-2">
      <label for="inputAddress">Semestre</label>
      <input type="text" class="form-control">
    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress">Carga Horária</label>
      <select class="custom-select" style="width:100%">
        <option selected>Selecione...</option>
        <option value="30">30</option>
        <option value="60">60</option>
        <option value="90">90</option>
        <option value="120">120</option>
      </select>
    </div>
  </div>
  <div class="col-md-3 col-md-offset-5">
    <button type="submit" class="btn btn-primary">Salvar</button>
    <a href="/"><button type="submit" class="btn btn-primary">Cancelar</button></a>
  </div>
</form>

@endsection
