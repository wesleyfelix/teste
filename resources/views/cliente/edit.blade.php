@extends('layouts.app')
@section('content')
    <h3 class="page-header">Editar Item {{ $cliente->id }}</h3>

    <form action="{{ route('cliente.salvar') }}" method="post">

        <input type="hidden" name="id" value="{{ $cliente->id }}">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" value="{{ $cliente->nome }}" id="nome" name="nome">
            </div>

            <div class="form-group col-md-4">
                <label for="idade">Idade</label>
                <input type="text" class="form-control" value="{{ $cliente->idade }}" id="idade" name="idade">
            </div>

        </div>

        <hr />
        <div id="actions" class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="{{ route('cliente.list') }}" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </form>
@stop
