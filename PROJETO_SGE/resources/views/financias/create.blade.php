@extends('layout.main')

@section('content')
<h1>NOVO REGISTRO</h1>
<hr>
<form action="{{ route('financias-store') }}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="descricao" class="form-label">Descrição</label>
    <input type="text" name="descricao" class="form-control">
  </div>
  <div class="mb-3">
    <label for="tipo" class="form-label">Tipo</label>
    <input type="text" name="tipo" class="form-control">
  </div>
  <div class="mb-3">
    <label for="valor" class="form-label">Valor</label>
    <input type="text" name="valor" class="form-control">
  </div>
  <div class="mb-3">
    <label for="data_de_pagamento" class="form-label">Data de pagamento</label>
    <input type="text" name="data_de_pagamento" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
<br>

@if($errors->any())
  @foreach($errors->all() as $error)
    <p>{{$error}}</p>
  @endforeach
@endif

@endsection