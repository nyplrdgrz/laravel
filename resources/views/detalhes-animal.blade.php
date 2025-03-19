@extends('_partials/main')

@section('conteudo')
<body class="bg-custom-light">
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
              <a class="nav-link text-custom-dark" href="#">Início</a>
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

    <!-- Animal Details Section -->
    <div class="animal-details-container mb-5">
      <div class="text-center">
        <img src="https://fotos.amomeupet.org/uploads/fotos/1626097701_60ec482584181_hd.jpeg" class="img-fluid" alt="Rex">
      </div>
      <h1 class="text-center text-custom-dark mb-4">Rex</h1>
      <div class="row">
        <div class="col-md-6">
          <p class="text-custom-dark"><strong>Espécie:</strong> Cachorro</p>
          <p class="text-custom-dark"><strong>Sexo:</strong> Macho</p>
          <p class="text-custom-dark"><strong>Idade:</strong> 2 anos</p>
          <p class="text-custom-dark"><strong>Porte:</strong> Médio</p>
        </div>
        <div class="col-md-6">
          <p class="text-custom-dark"><strong>Raça:</strong> Vira-lata</p>
          <p class="text-custom-dark"><strong>Cor:</strong> Caramelo</p>
          <p class="text-custom-dark"><strong>Localização:</strong> São Paulo, SP</p>
          <p class="text-custom-dark"><strong>Data de Resgate:</strong> 10/03/2023</p>
        </div>
      </div>
      <div class="mt-4">
        <h3 class="text-custom-dark">Sobre o Rex</h3>
        <p class="text-custom-dark">Rex é um cachorro brincalhão e cheio de energia. Ele foi resgatado das ruas e está procurando um lar amoroso. Adora passeios, brincar com bolinhas e se dá muito bem com crianças e outros animais. Rex é vacinado, castrado e está pronto para fazer parte de uma família!</p>
      </div>
      <div class="mt-4">
        <h3 class="text-custom-dark">Requisitos para Adoção</h3>
        <ul class="text-custom-dark">
          <li>Ter espaço adequado para um cachorro de porte médio.</li>
          <li>Compromisso com os cuidados veterinários.</li>
          <li>Disponibilidade para passeios diários.</li>
          <li>Ambiente seguro e livre de riscos.</li>
        </ul>
      </div>
      <div class="text-center mt-5">
        <a href="#" class="btn btn-custom-primary btn-lg">Quero Adotar</a>
      </div>
    </div>

@endsection

