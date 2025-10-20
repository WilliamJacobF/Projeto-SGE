@extends('layout.main')

@section('content')
<h1>Listagem de produtos</h1>
<hr>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Produto</th>
      <th scope="col">Codigo</th>
      <th scope="col">Data de recebimento</th>
      <th scope="col">Preço Unitario</th>
    </tr>
  </thead>
  <tbody>
@foreach($produtos as $produto)
    <tr>
        <th>{{ $produto->id }}</th>
        <td>{{ $produto->produto }}</td>
        <td>{{ $produto->codigo }}</td>
        <td>{{ $produto->data_de_recebimento }}</td>
        <td>{{ $produto->preço_unitario }}</td>
        <td class="d-flex"><a href="{{ route('produtos-edit', ['id'=>$produto->id]) }}" class="btn btn-primary">editar</a>
            <form action="{{ route('produtos-destroy', ['id'=>$produto->id]) }}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">deletar</button>
            </form>
        </td>
    </tr>
@endforeach
  </tbody>
</table>
<a href="{{ route('produtos-create') }}" class="btn btn-primary">Novo produto</a>

@endsection