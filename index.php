<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <title>SPN ALL - Alguma Descrição...</title>
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- ===== ICONS ===== -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <!-- ===== CSS ===== -->
  <link rel="stylesheet" href="assets/css/style.css" />




  <style>
    @import url('https://fonts.googleapis.com/icon?family=Material+Icons');
.carousel-container {
  width: 1280px;
  margin: 0 auto;
  min-height: 200px;
  position: relative;
}
@media screen and (max-width: 768px) {
  .carousel-container {
    width: 80%;
  }
}
@media screen and (max-width: 1024px) {
  .carousel-container {
    width: 85%;
  }
}


.carousel-container .carousel-inner {
  overflow: hidden;
}

.carousel-container .track {
  display: inline-flex;
  transition: transform 0.5s;
  position: relative;
}
/*
.carousel-container .card-container {
  width: 259px;
  flex-shrink: 0;
  height: 250px;
  padding-right: 15px;
  box-sizing: border-box;
}*/
.carousel-container .card-container .card {
  width: 100%;
  height: 100%;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 10px;
  /*display: flex;
  flex-direction: row;*/
}
.carousel-container{
  position: relative;
}

.card {

  flex-direction: row;
}
.nav button {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  border: 1px solid #aaa;
  position: absolute;
  top: 40%;
  transform: translateY(-50%);
  cursor: pointer;
}
.nav .prev {
  left: -15px;
  display: none;
}
.nav .prev.show {
  display: block;
}
.nav .next {
  right: -15px;
}
.nav .next.hide {
  display: none;
}
/*
.card > * {
  flex: 1;
}
/*.card .img {
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 30px;
}*/
/*.card .info {
  flex-basis: 40px;
  background: #333;
  color: #fff;
  flex-grow: 0;
  padding: 10px;
  box-sizing: border-box;
}*/


.car{
  position: relative;

}

.car .countCar{
  position: absolute;
  top: -8px;
  right: -4px;
  border-radius: 50%;
}

  </style>
</head>

<body>

  <!--HEADER-->
  <header>
    <nav class="navbar navbar-dark bg-dark fixed-top">
      <button type="button" class="navbar-toggler d-lg-none">
        <img src="assets/images/toggle.png" alt="menu">
      </button>

      <a href="./" class="navbar-brand flex-grow-1">
        <img src="assets/images/logoBranca.png" alt="SPN All" class="my-1 mx-2">
      </a>

      <ul class="nav text-white d-none d-lg-flex">
        <li class="nav-item"><a class="nav-link text-reset active d-xl-none" href="#">Option</a></li>
        <li class="nav-item"><a class="nav-link text-reset d-xl-none" href="#">Option</a></li>


        <li class="nav-item"><a class="nav-link text-reset d-none d-xl-flex active" href="#">Inicio</a></li>
        <li class="nav-item"><a class="nav-link text-reset d-none d-xl-flex" href="#">Option</a></li>
        <li class="nav-item"><a class="nav-link text-reset d-none d-xl-flex" href="#">Option</a></li>
        <li class="nav-item"><a class="nav-link text-reset d-none d-xl-flex" href="#">Option</a></li>
        <li class="nav-item"><a class="nav-link text-reset d-none d-xl-flex" href="#">Option</a></li>
      </ul>


      <form action="" class="form-inline">
        <input type="search" name="pesquisar" id="pesquisar" placeholder="Estou buscando..." class="form-control">
      </form>

      <div class="car">
        <i class="fas fa-shopping-cart text-white px-2" style="font-size:22px;"></i>
        <span class="countCar badge badge-warning">99</span>
      </div>
     

      <div class="media text-white p-2 d-none d-lg-flex">
        <img src="assets/images/perfil.jpg" alt="Avatar" class="mr-2">
        <div class="media-body">
          <p class="h6 m-0">
            AlexandreSCorreia
          </p>
        </div>
      </div>

      <ul class="list-unstyled font-weight-bold sidebar">
        <li class="media media-avatar">
          <img src="assets/images/perfil.jpg" alt="Avatar" class="mr-2">
          <div class="media-body">
            <p class="h6 m-0 font-weight-bold">
              Olá, Entre
            </p>
            <small>ou cadastre-se</small>
          </div>
        </li>

        <li class="divider"></li>
        <li><a href="./" class="text-reset">Inicio</a></li>

        <li class="nav-item">
          <a href="?file=categorias" class="dropdown-toggle text-reset" data-toggle="dropdown">Categorias</a>
          <div class="dropdown-menu bg-dark">
            <a href="?file=Tecnologias" class="dropdown-item">Tecnologias</a>
            <a href="?file=Moda" class="dropdown-item">Moda</a>
            <a href="?file=eletronica" class="dropdown-item">Eletronica</a>
          </div>
        </li>

        <li><a href="?file=vender" class="text-reset">Vender</a></li>
      </ul>
    </nav>
  </header>

  <!--CONTENT-->

  <main>
    <?php
    $file = filter_input(INPUT_GET, "file", FILTER_SANITIZE_SPECIAL_CHARS);
    if (empty($file)) {
      require __DIR__ . "/views/home.php";
    } elseif ($file && file_exists(__DIR__ . "/views/{$file}.php")) {
      require __DIR__ . "/views/{$file}.php";
    } else {
      require __DIR__ . "/views/404.php";
    }
    ?>
  </main>


  <!--FOOTER-->
  <footer class="row no-gutters p-4">

    <div class="text-center p-4">
      <article class="mb-4">
        <h2 class="h5 py-2"><b>Sobre:</b></h2>
        <p>
          O melhor e mais completo <strong>e-commerce Nacional</strong>.
          Os melhores fornecedores, voce encontra aqui!
        </p>
        <a title="Termos de uso" href="?file=terms">Termos de uso</a>
      </article>
     
      <article class="">
        <h2 class="h5 py-2"><b>Contato:</b></h2>
        <p><i class="fas fa-phone-alt">&nbsp;</i><b>Telefone:</b><br> +55 55 5555.5555</p>
        <p><i class="fas fa-envelope"></i>&nbsp;<b>Email:</b><br> contato@spnall.com</p>
        <p><i class="fas fa-map-marker-alt"></i>&nbsp;<b>Endereço:</b><br> São Paulo, SP/Brasil</p>
      </article>
    </div>

  </footer>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="assets/js/scripts.js"></script>
</body>

</html>