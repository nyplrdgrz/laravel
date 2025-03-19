<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animais para Adoção - Adote um Amigo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      .bg-custom-light {
        background-color: #F2F2F0;
      }
      .bg-custom-dark {
        background-color: #593A27;
      }
      .text-custom-dark {
        color: #593A27;
      }
      .btn-custom-primary {
        background-color: #BF9169;
        border-color: #BF9169;
        color: #F2F2F0;
      }
      .btn-custom-primary:hover {
        background-color: #A69281;
        border-color: #A69281;
      }
      .navbar-custom {
        background-color: #BFB8AA;
      }
      .animal-card {
        margin-bottom: 20px;
      }
      .animal-card img {
        border-radius: 10px 10px 0 0;
      }
      .animal-card .card-body {
        background-color: #FFFFFF;
        border-radius: 0 0 10px 10px;
        padding: 20px;
      }
    </style>
  </head>
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
              <a class="nav-link active text-custom-dark" href="#">Animais para Adoção</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-custom-dark" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Animals List Section -->
    <div class="container mt-5">
      <h1 class="text-center text-custom-dark mb-5">Animais para Adoção</h1>
      <div class="row">
        <!-- Animal Card 1 -->
        <div class="col-md-4">
          <div class="card animal-card">
            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Rex">
            <div class="card-body">
              <h5 class="card-title text-custom-dark">Rex</h5>
              <p class="card-text text-custom-dark">Cachorro - Macho - 2 anos</p>
              <p class="card-text text-custom-dark">Rex é um cachorro brincalhão e cheio de energia. Adora passeios e se dá bem com crianças.</p>
              <a href="#" class="btn btn-custom-primary">Quero Adotar</a>
            </div>
          </div>
        </div>
        <!-- Animal Card 2 -->
        <div class="col-md-4">
          <div class="card animal-card">
            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Luna">
            <div class="card-body">
              <h5 class="card-title text-custom-dark">Luna</h5>
              <p class="card-text text-custom-dark">Gata - Fêmea - 3 anos</p>
              <p class="card-text text-custom-dark">Luna é uma gata carinhosa e tranquila. Ideal para quem busca um companheiro calmo.</p>
              <a href="#" class="btn btn-custom-primary">Quero Adotar</a>
            </div>
          </div>
        </div>
        <!-- Animal Card 3 -->
        <div class="col-md-4">
          <div class="card animal-card">
            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Bolinha">
            <div class="card-body">
              <h5 class="card-title text-custom-dark">Bolinha</h5>
              <p class="card-text text-custom-dark">Coelho - Macho - 1 ano</p>
              <p class="card-text text-custom-dark">Bolinha é um coelho curioso e amigável. Adora cenouras e brincar no quintal.</p>
              <a href="#" class="btn btn-custom-primary">Quero Adotar</a>
            </div>
          </div>
        </div>
        <!-- Animal Card 4 -->
        <div class="col-md-4">
          <div class="card animal-card">
            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Mel">
            <div class="card-body">
              <h5 class="card-title text-custom-dark">Mel</h5>
              <p class="card-text text-custom-dark">Cachorra - Fêmea - 4 anos</p>
              <p class="card-text text-custom-dark">Mel é uma cachorra dócil e amorosa. Perfeita para famílias que buscam um pet tranquilo.</p>
              <a href="#" class="btn btn-custom-primary">Quero Adotar</a>
            </div>
          </div>
        </div>
        <!-- Animal Card 5 -->
        <div class="col-md-4">
          <div class="card animal-card">
            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Thor">
            <div class="card-body">
              <h5 class="card-title text-custom-dark">Thor</h5>
              <p class="card-text text-custom-dark">Gato - Macho - 2 anos</p>
              <p class="card-text text-custom-dark">Thor é um gato brincalhão e cheio de personalidade. Adora explorar novos ambientes.</p>
              <a href="#" class="btn btn-custom-primary">Quero Adotar</a>
            </div>
          </div>
        </div>
        <!-- Animal Card 6 -->
        <div class="col-md-4">
          <div class="card animal-card">
            <img src="https://via.placeholder.com/300" class="card-img-top" alt="Pipoca">
            <div class="card-body">
              <h5 class="card-title text-custom-dark">Pipoca</h5>
              <p class="card-text text-custom-dark">Porquinho-da-índia - Fêmea - 1 ano</p>
              <p class="card-text text-custom-dark">Pipoca é uma porquinha-da-índia muito carinhosa e adora receber carinho.</p>
              <a href="#" class="btn btn-custom-primary">Quero Adotar</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="bg-custom-dark text-white pt-4 pb-2">
  <div class="container">
    <div class="row">
      <!-- Coluna 1: Sobre o site -->
      <div class="col-md-4 mb-4">
        <h5 class="text-custom-light">Adote um Amigo</h5>
        <p class="text-custom-light">Nosso objetivo é conectar animais de rua a lares amorosos. Ajude-nos a fazer a diferença!</p>
      </div>

      <!-- Coluna 2: Links rápidos -->
      <div class="col-md-4 mb-4">
        <h5 class="text-custom-light">Links Rápidos</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-custom-light text-decoration-none">Início</a></li>
          <li><a href="#" class="text-custom-light text-decoration-none">Sobre Nós</a></li>
          <li><a href="#" class="text-custom-light text-decoration-none">Animais para Adoção</a></li>
          <li><a href="#" class="text-custom-light text-decoration-none">Contato</a></li>
        </ul>
      </div>

      <!-- Coluna 3: Contato e Redes Sociais -->
      <div class="col-md-4 mb-4">
        <h5 class="text-custom-light">Contato</h5>
        <ul class="list-unstyled">
          <li class="text-custom-light"><i class="bi bi-envelope"></i> contato@adoteumamigo.com</li>
          <li class="text-custom-light"><i class="bi bi-phone"></i> (11) 1234-5678</li>
        </ul>
        <h5 class="text-custom-light mt-3">Redes Sociais</h5>
        <ul class="list-unstyled d-flex">
          <li class="me-3"><a href="#" class="text-custom-light"><i class="bi bi-facebook"></i></a></li>
          <li class="me-3"><a href="#" class="text-custom-light"><i class="bi bi-instagram"></i></a></li>
          <li class="me-3"><a href="#" class="text-custom-light"><i class="bi bi-twitter"></i></a></li>
        </ul>
      </div>
    </div>

    <!-- Rodapé inferior -->
    <div class="text-center mt-3 pt-3 border-top border-secondary">
      <p class="text-custom-light mb-0">&copy; 2023 Adote um Amigo. Todos os direitos reservados.</p>
    </div>
  </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>