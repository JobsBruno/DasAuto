@extends('layout')
@section('content')

<div class="container mt-5">
    <h2>Cadastro do Carro</h2>
    <form method="post" action="{{route('cadastra-car')}}">
        @csrf
        <div class="form-group">
            <label for="nomeCar">Nome do Carro:</label>
            <input type="text" class="form-control" id="nomeCar" name="nomeCar" placeholder="Digite o nome do Carro" required>
        </div>
        <div class="form-group">
            <label for="modeloCar">modelo do carro:</label>
            <input type="text" class="form-control" id="modeloCar" name="modeloCar" placeholder="Digite o modelo do carro" required>
        </div>
        <div class="form-group">
            <label for="anoCar">Qual o ano do carro:</label>
            <input type="text" class="form-control" id="anoCar" name="anoCar" placeholder="Qual o ano do modelo" required>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar Carro</button>
    </form>
</div>

@endsection