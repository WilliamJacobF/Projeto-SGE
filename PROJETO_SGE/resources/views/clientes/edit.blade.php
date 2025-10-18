@extends('layout.main')

@section('content')
<h1>Edição de cliente</h1>
<hr>
<form action="{{ route('clientes-update',['id'=>$clientes->id]) }}" method="POST">
@csrf
@method('PUT')
  <div class="mb-3">
    <label for="nome" class="form-label">Nome</label>
    <input type="text" name="nome" class="form-control" value="{{ $clientes->nome }}">
  </div>
  <div class="mb-3">
    <label for="sobrenome" class="form-label">Sobrenome</label>
    <input type="text" name="sobrenome" class="form-control" value="{{ $clientes->sobrenome }}">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">E-mail</label>
    <input type="text" name="email" class="form-control" value="{{ $clientes->email }}">
  </div>
  <div class="mb-3">
    <label for="idade" class="form-label">celular</label>
    <input type="text" name="celular" class="form-control"value="{{ $clientes->celular }}">
  </div>
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>
<br>

@if($errors->any())
  @foreach($errors->all() as $error)
    <p>{{$error}}</p>
  @endforeach
@endif

@endsection