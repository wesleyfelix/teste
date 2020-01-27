@extends('layouts.app')
@section('content')
    <h3 class="page-header">Listagem de Clientes</h3>
    <h4><a class="btn btn-success" href="{{ route('cliente.new') }}">novo</a></h4>

    @foreach($clientes as $cliente)
    <div class="row">
        <div class="col-md-4">
            <p><strong>Nome</strong></p>
            <p>{{ $cliente->nome }}</p>
        </div>
        <div class="col-md-4">
            <p><strong>Idade</strong></p>
            <p>{{ $cliente->idade }}</p>
        </div>
        <div class="col-md-4">
            <p><strong>acoes</strong></p>
            <p>
                <a class="btn btn-primary" href="{{ route('cliente.edit', ['id' => $cliente->id]) }}">Editar</a>
                <a class="btn btn-danger" href="{{ route('cliente.delete', ['id' => $cliente->id]) }}">Deletar</a>
            </p>
        </div>
    </div>
    @endforeach
@stop
