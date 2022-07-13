@extends('layouts.bootstrap')
@section('content')

<div class="container">
  <div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h1>Fazer transferências</h1>
    </div>
  </div>
</div>

<form action="{{ route('transfer.store') }}" method="POST">
  @csrf
  <div class="row">
    <div class="col">
      <select name="card" class="form-select" aria-label="Default select example">
        <option selected>Master</option>
        <option value="1">Nubank</option>
        <option value="2">Visa</option>
        <option value="3">Ame</option>
      </select>
      <div class="row g-2">
  <div class="col-md">
    <div class="form-floating">
      <input name="amount" type="text" class="form-control" id="floatingInputGrid" placeholder="Valor">
      <label for="floatingInputGrid">Valor</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating">
      <select name="coin" class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
        <option selected>Real</option>
        <option value="1">Dolar</option>
        <option value="2">Euro</option>
        <option value="3">Crypto</option>
      </select>
      <label for="floatingSelectGrid">Moeda</label>
    </div>
  </div>
</div>
    </div>
  </div>
 
 <button class="btn btn-primary" type="submit">Confirmar</button>

</form>
</div>


<main class="py-4 container">
  @yield('content')
</main>
