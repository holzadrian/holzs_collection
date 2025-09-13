<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Holz's Collection - Sua loja de roupas streetwear">
  <title>Login - Holz's Collection</title>

  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Font Awesome para ícones -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

  <style>
    :root {
      --primary-color: #000;
      --secondary-color: #333;
      --accent-color: #ccc;
      --text-color: #333;
      --background-color: #f8f8f8;
    }
    
    body {
      font-family: Arial, sans-serif;
      background: var(--background-color);
      padding: 0;
      margin: 0;
      color: var(--text-color);
      overflow-x: hidden;
    }

    /* Navbar - Sempre preta */
    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background: var(--primary-color) !important;
      z-index: 1000;
      padding: 10px 40px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar .nav-link,
    .navbar .navbar-brand {
      color: white !important;
      font-weight: 500;
    }

    .navbar .nav-link:hover,
    .navbar .navbar-brand:hover {
      color: var(--accent-color) !important;
    }

    .navbar-collapse {
      flex-grow: 0;
    }

    .navbar-nav {
      margin: 0 auto;
      display: flex;
      justify-content: center;
    }

    .nav-right {
      display: flex;
      align-items: center;
      margin-left: auto;
    }

    .nav-icon-btn {
      background: none;
      border: none;
      color: white;
      font-size: 1.2rem;
      margin-left: 15px;
      position: relative;
      transition: all 0.3s ease;
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
    }

    .nav-icon-btn:hover {
      background: rgba(255, 255, 255, 0.1);
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    .nav-icon-btn .cart-count {
      position: absolute;
      top: -5px;
      right: -5px;
      background: red;
      color: white;
      border-radius: 50%;
      width: 20px;
      height: 20px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 12px;
      font-weight: bold;
    }

    @media (max-width: 991px) {
      .navbar-collapse {
        flex-grow: 1;
      }
      
      .navbar-nav {
        text-align: center;
        margin: 0;
      }

      .nav-right {
        margin-left: 0;
        justify-content: center;
        margin-top: 15px;
      }
    }

    /* Seção de Login */
    .login-section {
      padding: 120px 0 80px;
      min-height: calc(100vh - 200px);
      display: flex;
      align-items: center;
    }

    .login-container {
      background: white;
      border-radius: 10px;
      padding: 40px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      max-width: 450px;
      width: 100%;
      margin: 0 auto;
    }

    .login-title {
      text-align: center;
      margin-bottom: 30px;
      font-size: 28px;
      font-weight: bold;
    }

    .login-form {
      display: flex;
      flex-direction: column;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
    }

    .form-input {
      width: 100%;
      padding: 12px;
      border: 1px solid #ddd;
      border-radius: 4px;
      font-size: 16px;
      transition: all 0.3s ease;
    }

    .form-input:focus {
      border-color: var(--primary-color);
      box-shadow: 0 0 0 2px rgba(0,0,0,0.1);
      outline: none;
    }

    .form-link {
      text-align: right;
      margin-bottom: 20px;
    }

    .form-link a {
      color: #666;
      text-decoration: none;
      font-size: 14px;
      transition: color 0.3s;
    }

    .form-link a:hover {
      color: var(--primary-color);
      text-decoration: underline;
    }

    .form-divider {
      height: 1px;
      background: #eee;
      margin: 25px 0;
    }

    .login-submit {
      background: var(--primary-color);
      color: white;
      border: none;
      padding: 12px;
      width: 100%;
      border-radius: 4px;
      font-weight: bold;
      cursor: pointer;
      transition: all 0.3s ease;
      font-size: 16px;
    }

    .login-submit:hover {
      background: #333;
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    .login-switch {
      text-align: center;
      margin-top: 20px;
    }

    .login-switch a {
      color: var(--primary-color);
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
    }

    .login-switch a:hover {
      color: #333;
      text-decoration: underline;
    }

    /* Contato */
    .contact-link {
      color: var(--primary-color);
      text-decoration: none;
      transition: color 0.3s;
    }

    .contact-link:hover {
      color: var(--secondary-color);
      text-decoration: underline;
    }
    
    .address-link {
      color: var(--primary-color);
      text-decoration: none;
      transition: all 0.3s ease;
      cursor: pointer;
    }
    
    .address-link:hover {
      color: var(--secondary-color);
      text-decoration: underline;
    }

    /* Footer */
    footer {
      background: var(--primary-color);
      color: white;
      padding: 40px 0;
    }

    /* Responsividade */
    @media (max-width: 768px) {
      .navbar {
        padding: 10px 15px;
      }
      
      .navbar-collapse {
        background: var(--primary-color);
        padding: 15px;
        margin-top: 10px;
        border-radius: 5px;
      }
      
      .login-container {
        padding: 30px 20px;
      }
      
      .login-title {
        font-size: 24px;
      }
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Holz's Collection</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="index.php#sobre">Sobre</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php#outlet">Outlet</a></li>
          <li class="nav-item"><a class="nav-link" href="index.php#contato">Contato</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Produtos</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="produtos/camisetas.php">Camisetas</a></li>
              <li><a class="dropdown-item" href="produtos/calcas.php">Calças</a></li>
              <li><a class="dropdown-item" href="produtos/tenis.php">Tênis</a></li>
            </ul>
          </li>
        </ul>
        
        <div class="nav-right">
          <button class="nav-icon-btn">
            <i class="fas fa-user"></i>
          </button>
          <button class="nav-icon-btn" id="cartBtn">
            <i class="fas fa-shopping-cart"></i>
            <span class="cart-count" id="cartCount">0</span>
          </button>
        </div>
      </div>
    </div>
  </nav>

  <!-- Seção de Login -->
  <section class="login-section">
    <div class="container">
      <div class="login-container">
        <h2 class="login-title">Iniciar sessão</h2>
        <form class="login-form" id="loginForm">
          <div class="form-group">
            <label class="form-label">E-MAIL</label>
            <input type="email" class="form-input" required>
          </div>
          
          <div class="form-group">
            <label class="form-label">SENHA</label>
            <input type="password" class="form-input" required>
          </div>
          
          <div class="form-link">
            <a href="#">Esqueceu a senha?</a>
          </div>
          
          <div class="form-divider"></div>
          
          <button type="submit" class="login-submit">INICIAR SESSÃO</button>
          
          <div class="login-switch">
            Não possui uma conta ainda? <a href="register.php">Criar uma conta</a>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- Contato -->
  <section id="contato" class="col-lg-8 mx-auto py-5">
    <div class="container">
      <h2 class="fw-normal text-center mb-5">Entre em contato</h2>
      <div class="contact-info">
        
        <p class="lead mb-4 text-center">
          <a href="tel:4799648-4105" class="contact-link">(47) 99648-4105</a>
        </p>
        
        <p class="lead mb-4 text-center">
          <a href="mailto:holzadrian8@gmail.com" class="contact-link">holzadrian8@gmail.com</a>
        </p>

        <p class="lead mb-4 text-center">
          <a href="https://maps.app.goo.gl/cWBvvbXnXPhEWroR9" target="_blank" class="address-link">
            R. Prof. Eunaldo Verdi, 300 - Jardim Sofia, Joinville - SC
          </a>
        </p>

      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="text-center">
    <div class="container">
      <p>Holz's Collection &copy; 2023 - Todos os direitos reservados</p>
      <div class="mt-3">
        <a href="https://www.instagram.com/hlzadrian" target="_blank" rel="noopener noreferrer" class="text-white me-3">Instagram</a>
        <a href="https://wa.me/5547996484105" target="_blank" rel="noopener noreferrer" class="text-white">WhatsApp</a>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    document.getElementById('loginForm').addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Simulação de login bem-sucedido
      alert('Login realizado com sucesso!');
      
      // Redirecionar de volta para a página principal
      window.location.href = 'index.php';
    });
  </script>
</body>
</html>