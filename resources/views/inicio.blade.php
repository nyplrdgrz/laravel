@extends('_partials/main')

@section('conteudo')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-custom">
      <div class="container-fluid">
        <a class="navbar-brand text-custom-dark" href="#">Adote um Amigo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active text-custom-dark" aria-current="page" href="#">Início</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-custom-dark" href="#">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-custom-dark" href="#">Animais para Adoção</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-custom-dark" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <div class="bg-custom-light p-5 text-center">
      <h1 class="text-custom-dark">Dê um Lar a um Amigo</h1>
      <p class="lead text-custom-dark">Encontre seu novo melhor amigo entre nossos animais disponíveis para adoção.</p>
      <a class="btn btn-custom-primary btn-lg" href="#" role="button">Ver Animais</a>
    </div>

    <!-- Featured Animals Section -->
    <div class="container mt-5">
      <h2 class="text-center text-custom-dark mb-4">Conheça Nossos Amigos</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-custom-dark">Rex</h5>
              <p class="card-text text-custom-dark">Um cachorro brincalhão e cheio de energia.</p>
              <a href="#" class="btn btn-custom-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-custom-dark">Luna</h5>
              <p class="card-text text-custom-dark">Uma gata carinhosa e tranquila.</p>
              <a href="#" class="btn btn-custom-primary">Adotar</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-custom-dark">Bolinha</h5>
              <p class="card-text text-custom-dark">Um coelho curioso e amigável.</p>
              <a href="#" class="btn btn-custom-primary">Adotar</a>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection