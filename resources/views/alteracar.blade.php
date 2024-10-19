@extends('layout')
@section('content')

<div class="container mt-5">
    <h2>Alterar Modelos Volkswagen</h2>
    <form method="post" action="{{ route('altera-car', $registrosCars->idCars) }}">
        @csrf
        @method('put')

        <div class="form-group">
            <label for="nomeCar">Nome do Carro Volkswagen:</label>
            <input type="text" class="form-control" id="nomeCar" name="nomeCar" placeholder="Digite o nome do Carro" required value="{{ $registrosCars->nomeCar }}">
        </div>
        <div class="form-group">
            <label for="modeloCar">Modelo do carro:</label>
            <input type="text" class="form-control" id="elementoWinx" name="elementoWinx" placeholder="Digite a raça do Alien" required value="{{ $registrosCars->modeloCar }}">
        </div>
        <div class="form-group">
            <label for="anoCar">Qual o ano do carro:</label>
            <input type="text" class="form-control" id="anoCar" name="anoCar" placeholder="Qual o ano do modelo" required value="{{ $registrosCars->anoCar }}">
        </div>
        <button type="submit" class="btn btn-primary">Alterar Carro</button>
    </form>
</div>

@endsection