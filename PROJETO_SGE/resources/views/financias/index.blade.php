@extends('layout.main')

@section('content')
<h1>Registro de financias</h1>
<hr>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Descrisão</th>
      <th scope="col">Tipo</th>
      <th scope="col">Valor</th>
      <th scope="col">Data de Pagamento</th>
    </tr>
  </thead>
  <tbody>
@foreach($financias as $financia)
    <tr>
        <th>{{ $financia->id }}</th>
        <td>{{ $financia->descricao }}</td>
        <td>{{ $financia->tipo }}</td>
        <td>{{ $financia->valor }}</td>
        <td>{{ $financia->data_de_pagamento }}</td>
        <td class="d-flex"><a href="{{ route('financias-edit', ['id'=>$financia->id]) }}" class="btn btn-primary">editar</a>
            <form action="{{ route('financias-destroy', ['id'=>$financia->id]) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">deletar</button>
            </form>
        </td>
    </tr>
@endforeach
  </tbody>
</table>
<a href="{{ route('financias-create') }}" class="btn btn-primary">Novo registro</a>
<a href="/" class="btn btn-primary">Voltar</a>

@endsection