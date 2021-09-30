@extends('layout')
@section('cabecalho')
    Adicionar Série
@endsection('cabecalho)

@section('conteudo')
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="nome" class="">Nome</label>
            <input type="text" class="form-control" name="nome" id="nome">
        </div>

        <button class="btn btn-success mt-2">Salvar</button>
    </form>
@endsection('conteudo')
