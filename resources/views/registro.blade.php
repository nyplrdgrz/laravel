<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro - Adote um Amigo</title>
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
      .register-container {
        max-width: 400px;
        margin: auto;
        margin-top: 50px;
        padding: 20px;
        background-color: #FFFFFF;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
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
              <a class="nav-link text-custom-dark" href="#">Animais para Adoção</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-custom-dark" href="#">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Register Form -->
    <div class="register-container">
      <h2 class="text-center text-custom-dark mb-4">Criar Conta</h2>
      <form>
        <div class="mb-3">
          <label for="name" class="form-label text-custom-dark">Nome Completo</label>
          <input type="text" class="form-control" id="name" placeholder="Digite seu nome completo" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label text-custom-dark">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Digite seu email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label text-custom-dark">Senha</label>
          <input type="password" class="form-control" id="password" placeholder="Digite sua senha" required>
        </div>
        <div class="mb-3">
          <label for="confirm-password" class="form-label text-custom-dark">Confirme sua Senha</label>
          <input type="password" class="form-control" id="confirm-password" placeholder="Confirme sua senha" required>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-custom-primary">Registrar</button>
        </div>
        <div class="text-center mt-3">
          <p class="text-custom-dark">Já tem uma conta? <a href="#" class="text-custom-dark">Faça login</a></p>
        </div>
      </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>