@extends('layouts.bootstrap')
@section('content')

<div class="container">
  <div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h1>Criar Projeto</h1>
    </div>
  </div>
</div>

<form action="{{ route('projects.store') }}" method="POST">
  @csrf
  <div class="row">
    <div class="col">
        <div class="col-md">
    <div class="form-floating">
      <input name="name" type="text" class="form-control" id="floatingInputGrid" placeholder="Nome do projeto">
      <label for="floatingInputGrid">Nome do projeto</label>
    </div>
  </div>
  <div class="form-floating">
  <textarea name="description" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">Descrição</label>
</div>
<div class="input-group mb-3">
  <input name="file" type="file" class="form-control" id="inputGroupFile02">
  <label class="input-group-text" for="inputGroupFile02">Enviar</label>
</div>

    </div>
  </div>
 <button class="btn btn-primary" type="submit">Confirmar</button>

</form>