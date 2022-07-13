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

<form action="{{ route('transfers.store') }}" method="POST">
  @csrf
  <div class="row">
    <div class="col">
      <select name="card" class="form-select" aria-label="Default select example">
        <option selected value="Master">Master</option>
        <option value="Nubank">Nubank</option>
        <option value="Visa">Visa</option>
        <option value="Ame">Ame</option>
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
        <option value="Dolar">Dolar</option>
        <option value="Euro">Euro</option>
        <option value="Crypto">Crypto</option>
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
