@extends('layout.main')

@section('content')

<h1>Home</h1>

<a href="{{ route('clientes-index') }}" class="btn btn-primary">Gerenciar clientes</a>
<a href="{{ route('produtos-index') }}" class="btn btn-primary">Gerenciar Estoque</a>
<a href="{{ route('financias-index') }}" class="btn btn-primary">Gerenciar Financias</a>

@endsection