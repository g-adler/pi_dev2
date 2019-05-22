@extends('layout')

@section('heading', 'Projeto Pedagógico de Cursos')

@section('content')
<form style="margin:25px">
  <div class="form-row">
    <div class="col-md-12 col-md-offset-4">
      <div class="form-group col-md-4">
        <label for="inputEmail4">Cursos</label>
        <select class="form-control">
          <option selected>Escolha o curso...</option>
          <option>Análise e Desenvolvimento de Sistemas</option>
          <option>Ciência da Computação</option>
          <option>Psicologia</option>
          <option>Engenharia Aeroespacial</option>
        </select>
      </div>
      <div class="form-group col-md-2" style="margin-top:25px">
        <button type="reset" class="btn btn-primary">Localizar</button>
      </div>
    </div>
  </div>
  <div style="border:black;" class="col-md-8 col-md-offset-4">
    <div class="col-md-6">
      <table class="table" border="black">
        <thead class="thead-dark">
          <tr>
            <th scope="col"></th>
            <th scope="col">Listagem Projetos Pedagógicos de Curso</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><input style="transform: scale(1.5);" type="checkbox"> </th>
            <td>Análise e Desenvolvimento - PPC - 01 </td>
            <td><button type="button">Alterar</button></td>
            <td><button type="button">Remover</button></td>
          </tr>
          <tr>
            <th scope="row"><input style="transform: scale(1.5);" type="checkbox"> </th>
            <td>Análise e Desenvolvimento - PPC - 02 </td>
            <td><button type="button">Alterar</button></td>
            <td><button type="button">Remover</button></td>
          </tr>
          <tr>
            <th scope="row"><input style="transform: scale(1.5);" type="checkbox"> </th>
            <td>Análise e Desenvolvimento - PPC - 03 </td>
            <td><button type="button">Alterar</button></td>
            <td><button type="button">Remover</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="col-md-12 col-md-offset-4">
    <button type="reset" class="btn btn-primary">Cancelar</button>
    <a href='/' style="color:white;"><button type="button" class="btn btn-primary">Sair</button>
  </div>
</form>
@endsection
