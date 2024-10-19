@extends('layout')

@section('content')
<main class="container my-5">
    <div class="jumbotron text-center">
        <h1 class="display-4">Bem-vindo a central de controle da Volkswagen</h1>
        <p class="lead">Cadastre os carros para controle</p>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="{{route('show-cadastro-car')}}" role="button">Comece agora!</a>
    </div>

    <div class="row text-center mt-5">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Cadastro</h5>
                    <p class="card-text">Cadastre as informações dos Veiculos.</p>
                    <a href="{{route('show-cadastro-car')}}" class="btn btn-primary">Cadastrar</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Gerenciamento</h5>
                    <p class="card-text">Gerencie os dados dos Carros.</p>
                    <a href="{{route('lista-car')}}" class="btn btn-primary">Gerenciar</a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
