@extends('layout.main')

@section('content')
<h1>Edição de produto</h1>
<hr>
<form action="{{ route('produtos-update',['id'=>$produtos->id]) }}" method="POST">
@csrf
@method('PUT')
  <div class="mb-3">
    <label for="produto" class="form-label">Produto</label>
    <input type="text" name="produto" class="form-control" value="{{ $produtos->produto }}">
  </div>
  <div class="mb-3">
    <label for="codigo" class="form-label">Codigo</label>
    <input type="text" name="codigo" class="form-control" value="{{ $produtos->codigo }}">
  </div>
  <div class="mb-3">
    <label for="data_de_recebimento" class="form-label">Data de recebimento</label>
    <input type="text" name="data_de_recebimento" class="form-control" value="{{ $produtos->data_de_recebimento }}">
  </div>
  <div class="mb-3">
    <label for="preço_unitario" class="form-label">Preço unitario</label>
    <input type="text" name="preço_unitario" class="form-control"value="{{ $produtos->preço_unitario }}">
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