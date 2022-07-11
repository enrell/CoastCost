<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h1>Fazer transferências</h1>
    </div>
  </div>
</div>

<form action="{{ route('transfer.store') }}" method="POST">
  @csrf
  <textarea name="a" id="a" cols="30" rows="10"></textarea>
</form>