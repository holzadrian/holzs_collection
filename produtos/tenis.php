<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Holz's Collection - Camisetas streetwear com as melhores marcas nacionais e internacionais. Envio rápido e preços especiais.">
  <title>Holz's Collection - Tênis</title>

  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- CSS Swiper -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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

    html {
      scroll-behavior: smooth;
      scroll-padding-top: 80px;
    }

    /* Navbar */
    .navbar {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      background: #000000 !important;
      z-index: 1000;
      padding: 20px 40px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar .nav-link,
    .navbar .navbar-brand {
      color: white !important;
      text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.7);
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

    /* Product Cards */
    .espaco-extra {
      margin-top: 100px;
      padding: 80px 0;
    }
    
    .product-card {
      background: #fff;
      border-radius: 10px;
      overflow: hidden;
      text-align: center;
      padding: 10px;
      margin-bottom: 30px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      transition: transform 0.2s ease-in-out;
    }
    
    .product-card:hover {
      transform: translateY(-5px);
    }
    
    .product-image {
      width: 100%;
      height: auto;
      display: block;
      transition: opacity 0.3s ease-in-out;
      cursor: pointer;
    }
    
    .product-name {
      margin-top: 10px;
      font-weight: bold;
      cursor: pointer;
      text-decoration: none;
      color: black;
    }
    
    .product-name:hover {
      text-decoration: none;
      color: var(--secondary-color);
    }
    
    .price {
      font-size: 18px;
      font-weight: bold;
      margin-top: 8px;
      cursor: pointer;
    }
    
    .buy-button {
      background: black;
      color: white;
      padding: 8px 16px;
      border: none;
      cursor: pointer;
      border-radius: 4px;
      margin-top: 8px;
      font-size: 14px;
      display: inline-block;
      text-decoration: none;
      transition: all 0.3s ease;
    }
    
    .buy-button:hover {
      background: #333;
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
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
      margin-top: 60px;
    }

    /* Gaveta do carrinho */
    .cart-drawer {
      position: fixed;
      top: 0;
      right: -400px;
      width: 400px;
      height: 100vh;
      background: white;
      z-index: 1002;
      box-shadow: -5px 0 15px rgba(0,0,0,0.1);
      transition: right 0.3s ease;
      overflow-y: auto;
      padding: 20px;
    }
    
    .cart-drawer.open {
      right: 0;
    }
    
    .cart-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 20px;
      padding-bottom: 10px;
      border-bottom: 1px solid #eee;
    }
    
    .close-cart {
      background: none;
      border: none;
      font-size: 24px;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    
    .close-cart:hover {
      transform: scale(1.1);
    }
    
    .cart-items {
      margin-bottom: 20px;
    }
    
    .cart-item {
      display: flex;
      margin-bottom: 15px;
      padding-bottom: 15px;
      border-bottom: 1px solid #eee;
    }
    
    .cart-item-img {
      width: 80px;
      height: 80px;
      object-fit: cover;
      margin-right: 15px;
    }
    
    .cart-item-details {
      flex: 1;
    }
    
    .cart-item-name {
      font-weight: bold;
      margin-bottom: 5px;
    }
    
    .cart-item-price {
      color: #333;
      font-weight: bold;
    }
    
    .cart-item-remove {
      background: none;
      border: none;
      color: #999;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    
    .cart-item-remove:hover {
      color: #ff0000;
      transform: scale(1.1);
    }
    
    .cart-item-quantity {
      display: flex;
      align-items: center;
      margin-top: 5px;
    }
    
    .quantity-btn {
      background: #f1f1f1;
      border: none;
      width: 25px;
      height: 25px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    
    .quantity-btn:hover {
      background: #ddd;
      transform: scale(1.1);
    }
    
    .quantity-input {
      width: 30px;
      text-align: center;
      border: 1px solid #ddd;
      border-radius: 4px;
      margin: 0 5px;
    }
    
    .cart-summary {
      margin-top: 20px;
    }
    
    .cart-subtotal {
      display: flex;
      justify-content: space-between;
      margin-bottom: 15px;
      font-weight: bold;
    }
    
    .shipping-methods {
      margin-top: 20px;
    }
    
    .shipping-toggle {
      background: #f8f8f8;
      border: none;
      padding: 10px;
      width: 100%;
      text-align: left;
      font-weight: bold;
      cursor: pointer;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: all 0.3s ease;
    }
    
    .shipping-toggle:hover {
      background: #eee;
    }
    
    .shipping-form {
      margin-top: 10px;
      padding: 10px;
      background: #f8f8f8;
      border-radius: 4px;
    }
    
    .cep-input {
      width: 100%;
      padding: 8px;
      border: 1px solid #ddd;
      border-radius: 4px;
      margin-bottom: 10px;
      font-family: Arial, sans-serif;
    }
    
    .cart-total {
      display: flex;
      justify-content: space-between;
      font-weight: bold;
      font-size: 18px;
      margin: 15px 0;
    }
    
    .pix-discount {
      color: #28a745;
      text-align: center;
      margin-bottom: 15px;
      font-weight: bold;
    }
    
    .checkout-btn {
      background: var(--primary-color);
      color: white;
      border: none;
      padding: 12px;
      width: 100%;
      border-radius: 4px;
      font-weight: bold;
      cursor: pointer;
      margin-bottom: 10px;
      transition: all 0.3s ease;
      font-family: Arial, sans-serif;
    }
    
    .checkout-btn:hover {
      background: #333;
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }
    
    .checkout-btn:disabled {
      background: #ccc;
      cursor: not-allowed;
      transform: none;
      box-shadow: none;
    }
    
    .more-products-btn {
      background: #f8f8f8;
      color: var(--primary-color);
      border: 1px solid #ddd;
      padding: 12px;
      width: 100%;
      border-radius: 4px;
      font-weight: bold;
      cursor: pointer;
      transition: all 0.3s ease;
      font-family: Arial, sans-serif;
    }
    
    .more-products-btn:hover {
      background: #eee;
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    
    .empty-cart {
      text-align: center;
      padding: 40px 0;
    }
    
    .empty-cart i {
      font-size: 48px;
      color: #ddd;
      margin-bottom: 15px;
    }
    
    /* Modal de produto */
    .product-modal {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.8);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 1003;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s ease;
    }
    
    .product-modal.open {
      opacity: 1;
      visibility: visible;
    }
    
    .modal-content {
      background: white;
      width: 90%;
      max-width: 800px;
      border-radius: 10px;
      overflow: hidden;
      position: relative;
    }
    
    .close-modal {
      position: absolute;
      top: 15px;
      right: 15px;
      background: none;
      border: none;
      font-size: 24px;
      cursor: pointer;
      z-index: 10;
      transition: all 0.3s ease;
    }
    
    .close-modal:hover {
      transform: scale(1.1);
    }
    
    .modal-body {
      display: flex;
      flex-direction: column;
    }
    
    @media (min-width: 768px) {
      .modal-body {
        flex-direction: row;
      }
    }
    
    .modal-product-image {
      width: 100%;
      height: 300px;
      object-fit: cover;
    }
    
    @media (min-width: 768px) {
      .modal-product-image {
        width: 50%;
        height: auto;
      }
    }
    
    .modal-product-details {
      padding: 20px;
      width: 100%;
    }
    
    @media (min-width: 768px) {
      .modal-product-details {
        width: 50%;
      }
    }
    
    .modal-product-name {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    
    .modal-product-price {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 20px;
    }
    
    .size-selection {
      margin-bottom: 20px;
    }
    
    .size-title {
      font-weight: bold;
      margin-bottom: 10px;
    }
    
    .size-options {
      display: flex;
      gap: 10px;
    }
    
    .size-option {
      border: 1px solid #ddd;
      padding: 8px 12px;
      cursor: pointer;
      border-radius: 4px;
      transition: all 0.3s ease;
    }
    
    .size-option:hover {
      background: #f8f8f8;
    }
    
    .size-option.selected {
      background: var(--primary-color);
      color: white;
      border-color: var(--primary-color);
    }
    
    .modal-add-to-cart {
      background: var(--primary-color);
      color: white;
      border: none;
      padding: 12px;
      width: 100%;
      border-radius: 4px;
      font-weight: bold;
      cursor: pointer;
      margin-top: 20px;
      transition: all 0.3s ease;
    }
    
    .modal-add-to-cart:hover {
      background: #333;
      transform: translateY(-2px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }
    
    /* Overlay para fechar o carrinho ao clicar fora */
    .overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.5);
      z-index: 1001;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s ease;
    }
    
    .overlay.open {
      opacity: 1;
      visibility: visible;
    }
    
    /* Animação de produto indo para o carrinho */
    @keyframes flyToCart {
      0% {
        opacity: 1;
        transform: scale(1) translate(0, 0);
      }
      20% {
        opacity: 0.8;
        transform: scale(0.8) translate(0, 0);
      }
      100% {
        opacity: 0;
        transform: scale(0.3) translate(100px, -100px);
      }
    }
    
    .flying-item {
      position: fixed;
      z-index: 1004;
      pointer-events: none;
      animation: flyToCart 1s forwards;
    }

    /* Responsividade */
    @media (max-width: 992px) {
      .navbar {
        padding: 15px 20px;
      }
      
      .cart-drawer {
        width: 350px;
      }
    }

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
      
      .cart-drawer {
        width: 300px;
      }
      
      .modal-body {
        flex-direction: column;
      }
      
      .modal-product-image {
        width: 100%;
        height: 300px;
      }
      
      .modal-product-details {
        width: 100%;
      }
    }

    @media (max-width: 576px) {
      .cart-drawer {
        width: 100%;
        right: -100%;
      }
      
      .size-options {
        flex-wrap: wrap;
      }
    }
  </style>
</head>
<body>
  <!-- Overlay para fechar o carrinho -->
  <div class="overlay" id="overlay"></div>

  <!-- Gaveta do carrinho -->
  <div class="cart-drawer" id="cartDrawer">
    <div class="cart-header">
      <h3>CARRINHO DE COMPRAS</h3>
      <button class="close-cart" id="closeCart">&times;</button>
    </div>
    
    <div class="cart-items" id="cartItems">
      <!-- Itens do carrinho serão adicionados aqui dinamicamente -->
    </div>
    
    <div class="cart-summary" id="cartSummary" style="display: none;">
      <div class="cart-subtotal">
        <span>Subtotal (sem frete):</span>
        <span id="cartSubtotal">R$0,00</span>
      </div>
      
      <div class="shipping-methods">
        <button class="shipping-toggle" id="shippingToggle">
          MEIOS DE ENVIO <i class="fas fa-chevron-down"></i>
        </button>
        <div class="shipping-form" id="shippingForm" style="display: none;">
          <input type="text" class="cep-input" placeholder="Digite seu CEP" id="cepInput">
          <button class="checkout-btn" onclick="calculateShipping()">Calcular Frete</button>
        </div>
      </div>
      
      <div class="cart-total">
        <span>Total:</span>
        <span id="cartTotal">R$0,00</span>
      </div>
      
      <div class="pix-discount" id="pixDiscount">
        <!-- Desconto PIX será calculado aqui -->
      </div>
      
      <button class="checkout-btn" id="checkoutBtn">INICIAR COMPRA</button>
      <button class="more-products-btn" onclick="goToProducts()">Ver mais produtos</button>
    </div>
  </div>

  <!-- Modal de produto -->
  <div class="product-modal" id="productModal">
    <div class="modal-content">
      <button class="close-modal" id="closeModal">&times;</button>
      <div class="modal-body">
        <img src="" alt="Produto" class="modal-product-image" id="modalProductImage">
        <div class="modal-product-details">
          <h2 class="modal-product-name" id="modalProductName"></h2>
          <div class="modal-product-price" id="modalProductPrice"></div>
          
          <div class="size-selection">
            <div class="size-title">TAMANHO</div>
            <div class="size-options" id="sizeOptions">
              <!-- Opções de tamanho serão adicionadas aqui dinamicamente -->
            </div>
          </div>
          
          <button class="modal-add-to-cart" id="modalAddToCart">COMPRAR</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.php">Holz's Collection</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="../index.php#sobre">Sobre</a></li>
          <li class="nav-item"><a class="nav-link" href="../index.php#outlet">Outlet</a></li>
          <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Produtos</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="camisetas.php">Camisetas</a></li>
              <li><a class="dropdown-item" href="calcas.php">Calças</a></li>
              <li><a class="dropdown-item" href="tenis.php">Tênis</a></li>
            </ul>
          </li>
        </ul>
        
        <div class="nav-right">
          <button class="nav-icon-btn" id="accountBtn">
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

  <!-- Tênis -->
  <section id="tenis" class="col-lg-8 mx-auto espaco-extra">
    <h2 class="fw-normal text-center mb-5">Tênis</h2>
    <div class="container">
      <div class="row">

        <!-- Produto 12 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="product-card">
            <img src="../images/Nike Court Vision Frente.png" data-hover="../images/Nike Court Vision Atras.avif" class="product-image" alt="Nike Court Vision Low" data-product='{"id":12,"name":"Nike Court Vision Low","price":379.90,"image":"../images/Nike Court Vision Frente.png","sizes":["36","37","38","39","40","41","42","43","44"]}'>
            <div class="product-name">Nike Court Vision Low</div>
            <div class="price">R$ 379,90</div>
            <button class="buy-button" data-product='{"id":12,"name":"Nike Court Vision Low","price":379.90,"image":"../images/Nike Court Vision Frente.png","sizes":["36","37","38","39","40","41","42","43","44"]}'>COMPRAR</button>
          </div>
        </div>

        <!-- Produto 13 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="product-card">
            <img src="../images/Nike Initiator.png" data-hover="../images/Nike Initiator Atras.png" class="product-image" alt="Nike Initiator" data-product='{"id":13,"name":"Nike Initiator","price":699.99,"image":"../images/Nike Initiator.png","sizes":["36","37","38","39","40","41","42","43","44"]}'>
            <div class="product-name">Nike Initiator</div>
            <div class="price">R$ 699,99</div>
            <button class="buy-button" data-product='{"id":13,"name":"Nike Initiator","price":699.99,"image":"../images/Nike Initiator.png","sizes":["36","37","38","39","40","41","42","43","44"]}'>COMPRAR</button>
          </div>
        </div>

        <!-- Produto 14 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="product-card">
            <img src="../images/Nike Air Max 95 Corteiz-Gridiron.png" data-hover="../images/Nike Air Max 95 Corteiz-Gridiron Atras.png" class="product-image" alt="Nike Air Max 95 Corteiz-Gridiron" data-product='{"id":14,"name":"Nike Air Max 95 Corteiz-Gridiron","price":14142.00,"image":"../images/Nike Air Max 95 Corteiz-Gridiron.png","sizes":["36","37","38","39","40","41","42","43","44"]}'>
            <div class="product-name">Nike Air Max 95 Corteiz-Gridiron</div>
            <div class="price">R$ 14.142,00</div>
            <button class="buy-button" data-product='{"id":14,"name":"Nike Air Max 95 Corteiz-Gridiron","price":14142.00,"image":"../images/Nike Air Max 95 Corteiz-Gridiron.png","sizes":["36","37","38","39","40","41","42","43","44"]}'>COMPRAR</button>
          </div>
        </div>

        <!-- Produto 15 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="product-card">
            <img src="../images/Nike Air Max Fire.png" data-hover="../images/Nike Air Max Fire Atras.png" class="product-image" alt="Nike Air Max Fire" data-product='{"id":15,"name":"Nike Air Max Fire","price":899.99,"image":"../images/Nike Air Max Fire.png","sizes":["36","37","38","39","40","41","42","43","44"]}'>
            <div class="product-name">Nike Air Max Fire</div>
            <div class="price">R$ 899,99</div>
            <button class="buy-button" data-product='{"id":15,"name":"Nike Air Max Fire","price":899.99,"image":"../images/Nike Air Max Fire.png","sizes":["36","37","38","39","40","41","42","43","44"]}'>COMPRAR</button>
          </div>
        </div>

        <!-- Produto 16 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="product-card">
            <img src="../images/Hocks Flat Lite Refletivo.png" data-hover="../images/Hocks Flat Lite Refletivo Atras.png" class="product-image" alt="Hocks Flat Lite Refletivo" data-product='{"id":16,"name":"Hocks Flat Lite Refletivo","price":269.90,"image":"../images/Hocks Flat Lite Refletivo.png","sizes":["36","37","38","39","40","41","42","43","44"]}'>
            <div class="product-name">Hocks Flat Lite Refletivo</div>
            <div class="price">R$ 269,90</div>
            <button class="buy-button" data-product='{"id":16,"name":"Hocks Flat Lite Refletivo","price":269.90,"image":"../images/Hocks Flat Lite Refletivo.png","sizes":["36","37","38","39","40","41","42","43","44"]}'>COMPRAR</button>
          </div>
        </div>

        <!-- Produto 17 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="product-card">
            <img src="../images/Hocks Puff Refletivo.png" data-hover="../images/Hocks Puff Refletivo Cima.png" class="product-image" alt="Hocks Puff Refletivo" data-product='{"id":17,"name":"Hocks Puff Refletivo","price":379.90,"image":"../images/Hocks Puff Refletivo.png","sizes":["36","37","38","39","40","41","42","43","44"]}'>
            <div class="product-name">Hocks Puff Refletivo</div>
            <div class="price">R$ 379,90</div>
            <button class="buy-button" data-product='{"id":17,"name":"Hocks Puff Refletivo","price":379.90,"image":"../images/Hocks Puff Refletivo.png","sizes":["36","37","38","39","40","41","42","43","44"]}'>COMPRAR</button>
          </div>
        </div>

        <!-- Produto 18 -->
        <div class="col-12 col-sm-6 col-lg-3">
          <div class="product-card">
            <img src="../images/Vans Old Skool Pro Skate.png" data-hover="../images/Vans Old Skool Pro Skate Atras.png" class="product-image" alt="Vans Old Skool Pro Skate" data-product='{"id":18,"name":"Vans Old Skool Pro Skate","price":449.90,"image":"../images/Vans Old Skool Pro Skate.png","sizes":["36","37","38","39","40","41","42","43","44"]}'>
            <div class="product-name">Vans Old Skool Pro Skate</div>
            <div class="price">R$ 449,90</div>
            <button class="buy-button" data-product='{"id":18,"name":"Vans Old Skool Pro Skate","price":449.90,"image":"../images/Vans Old Skool Pro Skate.png","sizes":["36","37","38","39","40","41","42","43","44"]}'>COMPRAR</button>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Contato -->
  <section id="contato" class="col-lg-8 mx-auto espaco-extra">
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
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // Variáveis globais
    let cart = [];
    let currentProduct = null;
    let selectedSize = null;
    let isLoggedIn = false; // Simulação de estado de login

    // Elementos do DOM
    const cartBtn = document.getElementById('cartBtn');
    const cartCount = document.getElementById('cartCount');
    const cartDrawer = document.getElementById('cartDrawer');
    const closeCart = document.getElementById('closeCart');
    const cartItems = document.getElementById('cartItems');
    const cartSummary = document.getElementById('cartSummary');
    const cartSubtotal = document.getElementById('cartSubtotal');
    const cartTotal = document.getElementById('cartTotal');
    const pixDiscount = document.getElementById('pixDiscount');
    const checkoutBtn = document.getElementById('checkoutBtn');
    const overlay = document.getElementById('overlay');
    const productModal = document.getElementById('productModal');
    const closeModal = document.getElementById('closeModal');
    const modalProductImage = document.getElementById('modalProductImage');
    const modalProductName = document.getElementById('modalProductName');
    const modalProductPrice = document.getElementById('modalProductPrice');
    const sizeOptions = document.getElementById('sizeOptions');
    const modalAddToCart = document.getElementById('modalAddToCart');
    const shippingToggle = document.getElementById('shippingToggle');
    const shippingForm = document.getElementById('shippingForm');
    const accountBtn = document.getElementById('accountBtn');

    // Função para corrigir o caminho da imagem conforme a página atual
    function getCorrectImagePath(originalPath) {
        const isProductsPage = window.location.pathname.includes('/produtos/');
        const hasParentPath = originalPath.includes('../');
        
        if (isProductsPage && !hasParentPath) {
            // Se estamos na pasta produtos e a imagem não tem ../, adiciona
            return '../' + originalPath;
        } else if (!isProductsPage && hasParentPath) {
            // Se estamos na raiz e a imagem tem ../, remove
            return originalPath.replace('../', '');
        }
        // Caso contrário, mantém o caminho original
        return originalPath;
    }

    // Inicialização
    document.addEventListener('DOMContentLoaded', function() {
        initSwiper();
        initEventListeners();
        loadCartFromStorage();
        updateCartUI();
        
        // Verificar se há um parâmetro de redirecionamento no URL
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get('redirect') === 'checkout') {
            openCart();
        }
    });

    // Inicializar Swiper
    function initSwiper() {
        const swiper = new Swiper('.swiper', {
            slidesPerView: 5,
            spaceBetween: 20,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                768: { slidesPerView: 2 },
                1024: { slidesPerView: 4 }
            }
        });

        // Troca de imagem no hover
        document.querySelectorAll('.product-image').forEach(img => {
            img.addEventListener('mouseenter', () => {
                const hoverSrc = img.getAttribute('data-hover');
                if (hoverSrc) img.src = hoverSrc;
            });
            img.addEventListener('mouseleave', () => {
                const originalSrc = img.getAttribute('data-original') || img.src;
                img.src = originalSrc;
            });
        });

        // Guardar imagem original para cada produto
        document.querySelectorAll('.product-image').forEach(img => {
            img.setAttribute('data-original', img.src);
        });
    }

    // Inicializar event listeners
    function initEventListeners() {
        // Navbar: muda cor ao rolar
        window.addEventListener("scroll", function () {
            const navbar = document.querySelector(".navbar");
            const hero = document.querySelector(".hero-section");
            const heroHeight = hero.offsetHeight;

            if (window.scrollY > heroHeight - 10) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        });

        // Carrinho
        cartBtn.addEventListener('click', openCart);
        closeCart.addEventListener('click', closeCartDrawer);
        overlay.addEventListener('click', closeCartDrawer);
        
        // Modal de produto
        closeModal.addEventListener('click', closeProductModal);
        overlay.addEventListener('click', closeProductModal);
        modalAddToCart.addEventListener('click', addToCartFromModal);
        
        // Botões de compra
        document.querySelectorAll('.buy-button').forEach(button => {
            button.addEventListener('click', function() {
                const productData = JSON.parse(this.getAttribute('data-product'));
                openProductModal(productData);
            });
        });
        
        // Toggle de envio
        shippingToggle.addEventListener('click', function() {
            const isVisible = shippingForm.style.display === 'block';
            shippingForm.style.display = isVisible ? 'none' : 'block';
            this.querySelector('i').classList.toggle('fa-chevron-down');
            this.querySelector('i').classList.toggle('fa-chevron-up');
        });
        
        // Checkout
        checkoutBtn.addEventListener('click', function() {
            if (cart.length === 0) {
                alert('Seu carrinho está vazio!');
                return;
            }
            
            // Verificar se o usuário está logado
            if (!isLoggedIn) {
                closeCartDrawer();
                // Redirecionar para login com parâmetro para voltar ao checkout
                window.location.href = 'login.php?redirect=checkout';
            } else {
                alert('Redirecionando para o pagamento...');
                // Aqui você implementaria o redirecionamento para a página de pagamento
            }
        });
        
        // Botão de conta - redireciona para login
        accountBtn.addEventListener('click', function() {
            window.location.href = '../account/login.php';
        });
    }

    // Abrir modal de produto
    function openProductModal(product) {
        currentProduct = product;
        selectedSize = product.sizes[0]; // Seleciona o primeiro tamanho por padrão
        
        modalProductImage.src = product.image;
        modalProductName.textContent = product.name;
        modalProductPrice.textContent = `R$ ${product.price.toFixed(2).replace('.', ',')}`;
        
        // Criar opções de tamanho
        sizeOptions.innerHTML = '';
        product.sizes.forEach(size => {
            const sizeOption = document.createElement('div');
            sizeOption.className = `size-option ${size === selectedSize ? 'selected' : ''}`;
            sizeOption.textContent = size;
            sizeOption.addEventListener('click', () => selectSize(size, sizeOption));
            sizeOptions.appendChild(sizeOption);
        });
        
        productModal.classList.add('open');
        overlay.classList.add('open');
        document.body.style.overflow = 'hidden';
    }

    // Fechar modal de produto
    function closeProductModal() {
        productModal.classList.remove('open');
        overlay.classList.remove('open');
        document.body.style.overflow = 'auto';
    }

    // Selecionar tamanho no modal
    function selectSize(size, element) {
        selectedSize = size;
        
        // Remover a classe 'selected' de todos os tamanhos
        document.querySelectorAll('.size-option').forEach(option => {
            option.classList.remove('selected');
        });
        
        // Adicionar a classe 'selected' ao tamanho clicado
        element.classList.add('selected');
    }

    // Adicionar ao carrinho a partir do modal
    function addToCartFromModal() {
        if (!currentProduct || !selectedSize) return;
        
        addToCart(currentProduct, selectedSize);
        closeProductModal();
        
        // Animação do produto voando para o carrinho
        const flyingItem = document.createElement('img');
        flyingItem.src = currentProduct.image;
        flyingItem.className = 'flying-item';
        flyingItem.style.width = '50px';
        flyingItem.style.height = '50px';
        flyingItem.style.objectFit = 'cover';
        flyingItem.style.borderRadius = '4px';
        flyingItem.style.position = 'fixed';
        flyingItem.style.top = '50%';
        flyingItem.style.left = '50%';
        flyingItem.style.transform = 'translate(-50%, -50%)';
        
        document.body.appendChild(flyingItem);
        
        // Posicionar o ícone do carrinho para a animação
        const cartBtnRect = cartBtn.getBoundingClientRect();
        const cartBtnX = cartBtnRect.left + cartBtnRect.width / 2;
        const cartBtnY = cartBtnRect.top + cartBtnRect.height / 2;
        
        flyingItem.style.setProperty('--cart-btn-x', `${cartBtnX}px`);
        flyingItem.style.setProperty('--cart-btn-y', `${cartBtnY}px`);
        
        // Remover o elemento após a animação
        setTimeout(() => {
            document.body.removeChild(flyingItem);
        }, 1000);
    }

    // Adicionar produto ao carrinho
    function addToCart(product, size) {
        // Verificar se o produto já está no carrinho com o mesmo tamanho
        const existingItemIndex = cart.findIndex(item => 
            item.id === product.id && item.size === size
        );
        
        // Sempre salva o caminho relativo à raiz (sem ../)
        let imagePath = product.image;
        if (imagePath.startsWith('../')) {
            imagePath = imagePath.substring(3); // Remove o ../
        }
        
        if (existingItemIndex !== -1) {
            // Se já existe, aumentar a quantidade
            cart[existingItemIndex].quantity += 1;
        } else {
            // Se não existe, adicionar novo item
            cart.push({
                id: product.id,
                name: product.name,
                price: product.price,
                image: imagePath, // Salva sempre como "images/..."
                size: size,
                quantity: 1
            });
        }
        
        saveCartToStorage();
        updateCartUI();
    }

    // Remover item do carrinho
    function removeFromCart(index) {
        cart.splice(index, 1);
        saveCartToStorage();
        updateCartUI();
    }

    // Atualizar quantidade do item no carrinho
    function updateQuantity(index, change) {
        cart[index].quantity += change;
        
        // Não permitir quantidade menor que 1
        if (cart[index].quantity < 1) {
            cart[index].quantity = 1;
        }
        
        saveCartToStorage();
        updateCartUI();
    }

    // Salvar carrinho no localStorage
    function saveCartToStorage() {
        localStorage.setItem('holzCart', JSON.stringify(cart));
    }

    // Carregar carrinho do localStorage
    function loadCartFromStorage() {
        const savedCart = localStorage.getItem('holzCart');
        if (savedCart) {
            cart = JSON.parse(savedCart);
        }
    }

    // Atualizar UI do carrinho
    function updateCartUI() {
        // Atualizar contador do carrinho
        const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
        cartCount.textContent = totalItems;
        
        // Atualizar itens do carrinho
        if (cart.length === 0) {
            cartItems.innerHTML = `
                <div class="empty-cart">
                    <i class="fas fa-shopping-cart"></i>
                    <p>O carrinho de compras está vazio.</p>
                    <button class="checkout-btn" onclick="goToOutlet()">IR PARA O OUTLET</button>
                </div>
            `;
            cartSummary.style.display = 'none';
            checkoutBtn.disabled = true;
        } else {
            cartItems.innerHTML = '';
            cart.forEach((item, index) => {
                // Corrige o caminho da imagem para a página atual
                const correctedImagePath = getCorrectImagePath(item.image);
                
                const itemElement = document.createElement('div');
                itemElement.className = 'cart-item';
                itemElement.innerHTML = `
                    <img src="${correctedImagePath}" alt="${item.name}" class="cart-item-img">
                    <div class="cart-item-details">
                        <div class="cart-item-name">${item.name} (${item.size})</div>
                        <div class="cart-item-price">R$ ${item.price.toFixed(2).replace('.', ',')}</div>
                        <div class="cart-item-quantity">
                            <button class="quantity-btn" onclick="updateQuantity(${index}, -1)">-</button>
                            <input type="number" class="quantity-input" value="${item.quantity}" min="1" readonly>
                            <button class="quantity-btn" onclick="updateQuantity(${index}, 1)">+</button>
                        </div>
                    </div>
                    <button class="cart-item-remove" onclick="removeFromCart(${index})">
                        <i class="fas fa-trash"></i>
                    </button>
                `;
                cartItems.appendChild(itemElement);
            });
            cartSummary.style.display = 'block';
            checkoutBtn.disabled = false;
        }
        
        // Atualizar totais
        const subtotal = cart.reduce((total, item) => total + (item.price * item.quantity), 0);
        cartSubtotal.textContent = `R$ ${subtotal.toFixed(2).replace('.', ',')}`;
        cartTotal.textContent = `R$ ${subtotal.toFixed(2).replace('.', ',')}`;
        
        // Atualizar desconto PIX
        const pixValue = subtotal * 0.95;
        pixDiscount.textContent = `Ou R$ ${pixValue.toFixed(2).replace('.', ',')} com Pix`;
    }

    // Abrir carrinho
    function openCart() {
        cartDrawer.classList.add('open');
        overlay.classList.add('open');
        document.body.style.overflow = 'hidden';
    }

    // Fechar carrinho
    function closeCartDrawer() {
        cartDrawer.classList.remove('open');
        overlay.classList.remove('open');
        document.body.style.overflow = 'auto';
    }

    // Calcular frete (simulação)
    function calculateShipping() {
        const cepInput = document.getElementById('cepInput');
        const cep = cepInput.value.replace(/\D/g, '');
        
        if (cep.length !== 8) {
            alert('CEP inválido. Digite um CEP com 8 dígitos.');
            return;
        }
        
        // Simulação de cálculo de frete
        alert(`Frete calculado para o CEP ${cep}. Em uma implementação real, isso se conectaria a uma API de cálculo de frete.`);
    }

    // Ir para o outlet
    function goToOutlet() {
        closeCartDrawer();
        document.getElementById('outlet').scrollIntoView({ behavior: 'smooth' });
    }

    // Funções globais para uso nos eventos HTML
    window.openCart = openCart;
    window.closeCart = closeCartDrawer;
    window.updateQuantity = updateQuantity;
    window.removeFromCart = removeFromCart;
    window.calculateShipping = calculateShipping;
    window.goToOutlet = goToOutlet;
</script>
</body>
</html>