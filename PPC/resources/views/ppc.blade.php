@extends('layout')

@section('heading', 'Projeto Pedagógico de Cursos')

@section('content')
<form style="margin:25px">
  <div class="form-row">
    <div class="col-md-12">
      <div class="form-group col-md-4">
        <label for="inputEmail4">Cursos</label>
        <input type="textarea" class="form-control" id="inputEmail4">
      </div>
    </div>
    <div class="form-group col-md-4">
      <label for="inputEmail4">Perfil Curso</label>
      <input type="text" class="form-control" id="inputEmail4">
    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress">Perfil do Egresso</label>
      <input type="text" class="form-control">
    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress">Forma de Acesso Curso</label>
      <input type="text" class="form-control">
    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress">Representação Gráfica de um Perfil de Formcação</label>
      <input type="text" class="form-control">
    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress">Sistema de Avaliação do Processo Ensino Aprendizagem</label>
      <input type="text" class="form-control">
    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress">Sistema de Avaliação do Projeto de Curso</label>
      <input type="text" class="form-control">
    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress">Trabalho de Conclusão de Curso</label>
      <input class="form-check-input" type="checkbox" id="gridCheck1">
    </div>
    <div class="form-group col-md-4">
      <label for="inputAddress">Estágio Curricular</label>
      <input class="form-check-input" type="checkbox" id="gridCheck1">
    </div>
    <div class="form-group col-md-8">
      <label for="inputAddress">Política de Atendimento a Pessoas com Deficiência e/ou Mobilidade Reduzida</label>
      <input class="form-check-input" style="width:100%; height:100px" type="text" id="gridCheck1">
    </div>
  </div>
  <div class="col-md-12">
    <button type="submit" class="btn btn-primary">Salvar</button>
    <button type="reset" class="btn btn-primary">Limpar</button>
  </div>
</form>
@endsection
