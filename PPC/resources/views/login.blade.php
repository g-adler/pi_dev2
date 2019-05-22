@extends ('layout')

@push('styling')
<style>
  .form-signin {
    width: 100%;
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
    }
</style>
@endpush

@section('content')
  <h1 class="text-center">Gestão de Projetos Pedagógicos de Curso</h1>
  <div class="text-center">
    <form class="form-signin">
          <h1 class="h3 mb-3 font-weight-normal">Bem vindo!</h1>
          <label for="inputEmail" class="sr-only">Email</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
          <label for="inputPassword" class="sr-only">Senha</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
          <br>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
    </form>
  </div>
@endsection
