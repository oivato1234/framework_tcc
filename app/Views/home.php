<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas vindas</title>
</head>

<body class= bodyhome>
<h1>Bem vindo(a) </h1>
    <h2>Descomplicando Sua Vida Na Informática</h2>
    <div class="box1">
        <a class="login" href="login.php"><b><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>Login</b></a>
        <a class="login" href="cadastro.php"><b><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-card-list" viewBox="0 0 16 16">
  <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
</svg>Cadastre-se</b></a>
        </div> 
<?php
$this->extend('layout/Layout');
$this->section('menu');
echo $this->include('menu');
$this->endsection();
$this->section('conteudo');?>
<center>

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  <center>
    <div class="carousel-item active">
      <img src="https://cdn.wccftech.com/wp-content/uploads/2020/05/AMD-Ryzen-3-3300X-Ryzen-3-3100-CPUs.jpg" class="d-block w-25" alt="...">
    </div>

    <div class="carousel-item">
      <img src="https://www.wallpapertip.com/wmimgs/242-2422233_amd-ryzen-views.jpg" class="d-block w-25" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.teahub.io/photos/full/263-2630706_amd-radeon-hd-7990-amd-game-evolved.jpg" class="d-block w-25" alt="...">
    </div>
    </center>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
  <center>
    <div class="carousel-item active">
      <img src="https://images.blog.avell.com.br/wp-content/uploads/2016/10/avell-facebook-710x372-intel1-600x300.jpg" class="d-block w-25" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://s2.glbimg.com/yznzqr0XEWk3weOgP7RgcAdZGFg=/0x0:984x689/984x0/smart/filters:strip_icc()/i.s3.glbimg.com/v1/AUTH_08fbf48bc0524877943fe86e43087e7a/internal_photos/bs/2021/S/e/sPwkpLSv6rB73VBnD6qw/intel1.jpg" class="d-block w-25" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://www.intel.com.br/content/dam/www/global/badges/core-x-series-framed-badge-rwd.jpg.rendition.intel.web.480.270.jpg" class="d-block w-25" alt="...">
    </div>
    </center>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</center><?php
$this->endsection();
?>
</body>
</html>

