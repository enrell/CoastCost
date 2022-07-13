@extends('layouts.bootstrap')
@section('content')

<form action="{{ route('cards.store') }}" method="POST">
  @csrf
<div class="row">
    <div class="col">
<div class="col-md">
    <div class="form-floating">
      <input name="number" type="text" class="form-control" id="floatingInputGrid" placeholder="Valor">
      <label for="floatingInputGrid">Número</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating">
      <input name="cvv" type="text" class="form-control" id="floatingInputGrid" placeholder="Valor">
      <label for="floatingInputGrid">cvv</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating">
      <input name="data" type="text" class="form-control" id="floatingInputGrid" placeholder="Valor">
      <label for="floatingInputGrid">Data de vencimento</label>
    </div>
  </div>
</div>
</div>
<button class="btn btn-primary" type="submit">Confirmar</button>
</form>
