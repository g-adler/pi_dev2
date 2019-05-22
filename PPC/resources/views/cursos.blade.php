@extends('layout')

@section('heading', 'Incluir dados gerais do curso')

@section('content')
<form style="margin:25px">
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputEmail4">Tipo do Curso</label>
      <input type="text" class="form-control">
    </div>
    <div class="form-group col-md-3">
      <label for="inputEmail4">Modalidade</label>
      <input type="text" class="form-control">
    </div>
    <div class="form-group col-md-3">
      <label for="inputAddress">Denominação do Curso</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="form-group col-md-3">
      <label for="inputAddress">Habilitação</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="form-group col-md-3">
      <label for="inputAddress">Local de Oferta</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="form-group col-md-3">
      <label for="inputAddress">Turnos de funcionamento</label>
      <input type="text" class="form-control"  >
    </div>
    <div class="form-group col-md-3">
      <label for="inputAddress">Número de Vagas para cada Turno</label>
      <input type="number" class="form-control"  >vagas anuais
    </div>
    <div class="form-group col-md-3">
      <label for="inputAddress">Carga Horária do Curso</label>
      <input type="number" class="form-control"  >
    </div>
  </div>
  </br>
  <div class="form-row col-md-12">
    <div class="form-row col-md-6">
      <h3> Estrutura curricular:</h3>
      <div class="form-group col-md-6">
        <label for="inputAddress">Regime Letivo</label>
        <input type="text" class="form-control"  >
      </div>
      <div class="form-group col-md-6">
        <label for="inputAddress">Períodos</label>
        <input type="text" class="form-control" >
      </div>
    </div>
    <h3> Coordenador de Curso: <a href="/professores">Cadastrar novo Coordenador</a></h3>
    <div class="form-row col-md-6">
      <div class="form-group col-md-4">
        <label for="inputAddress">Nome</label>
        <input type="text" class="form-control"  >
      </div>
      <div class="form-group col-md-4">
        <label for="inputAddress">CPF</label>
        <input type="text"  disabled class="form-control"  >
      </div>
      <div class="form-group col-md-4">
        <label for="inputAddress">Tempo de Dedicação</label>
        <input type="text" class="form-control"  disabled  >
      </div>
      <button type="submit" class="btn btn-primary">Salvar</button>
      <button type="submit" class="btn btn-primary">Consultar</button>
      <button type="reset" class="btn btn-primary">Limpar</button>
      <button type="button" disabled class="btn btn-primary">Alterar</button>
    </div>
  </div>
</form>
@endsection
