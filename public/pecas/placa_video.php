<?php
include "bootstrap.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
      *{
  margin:8px;
  padding:4px;
}

body {
  background: url(https://images2.alphacoders.com/105/1053867.jpg);
   background-repeat: no-repeat;
       font-family:Arial, Helvetica, sans-serif;
       text-align: center;
       color: #DCDCDC;
}

.d-block.w-25{
    width: 50%;
    float:left;
}
.texto {
    width: 15%;
    float:left;
    
}

.paginacao {
position: absolute;
left: 28em;
}
.texto1{
border-style: solid;
}
.texto{
border-style: solid;
}
.voltar{
background-color: rgba(0, 0, 0, 0.8);
border-radius: 7px;
text-decoration: none;
color: #DCDCDC;
border: 1px solid dodgerblue;
padding: 7px;
position: relative;
right: 43.2em;
top: 2px;
}


</style>
<body>
<a class= "voltar" href="/tcc/menu.php"><b>Voltar</b></a><br><br>
  <h2 class="texto1">Placa de Vídeo</h2>
  <p class="texto1">Placa de vídeo: aquilo que você visualiza na tela do seu computador são gráficos gerados pela placa de vídeo. Esses gráficos são processados para sua exibição pela placa de vídeo através do monitor. A função resumida da placa de vídeo é processar arquivos já existentes no computador e exibi-los no monitor. </p>

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="plc_video.png" class="d-block w-25"> <br><br><br><br>
      <p class="texto">Como é uma placa de vídeo</p>
    </div>
  </div>
</div>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="slot_plc_video.png" class="d-block w-25"><br><br><br><br>
      <p class="texto">Slot para encaixe de uma placa de vídeo</p>
    </div>
  </div>
</div>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="plc_na_plc_mae.png" class="d-block w-25"><br><br><br><br>
      <p class="texto">Encaixe da placa de vídeo na placa mãe</p>
    </div>
  </div>
</div>
<h2 class="texto1">Diferença de uma placa de vídeo dedicada e integrada</h2>
  <p class="texto1">A placa de vídeo também pode ser chamada de GPU (Graphics Processing Unit) e pode ser de dois tipos: integrada ou dedicada.</p>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="gpu_int_ded.png" class="d-block w-25">
      <p class="texto">Uma placa de vídeo integrada é aquela que fica “embutida” no processador. É mais simples e serve para tarefas mais básicas, pois compartilha memória RAM com todo o sistema.</p>
      <p class="texto">Uma placa de vídeo dedicada é um componente separado do processador. É mais avançada e serve para tarefas mais complexas, pois possui memória exclusiva (dedicada) e maior poder de processamento.</p>
    </div>
  </div>
</div>
  <div class="paginacao">
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
    </li>
    <li class="page-item"><a class="page-link" href="placa_mae.php">1</a></li>
    <li class="page-item"><a class="page-link" href="processador.php">2</a></li>
    <li class="page-item"><a class="page-link" href="placa_video.php">3</a></li>
    <li class="page-item"><a class="page-link" href="memoria_ram.php">4</a></li>
    <li class="page-item"><a class="page-link" href="hd.php">5</a></li>
    <li class="page-item"><a class="page-link" href="ssd.php">6</a></li>
    <li class="page-item"><a class="page-link" href="gabinete.php">7</a></li>
    <li class="page-item"><a class="page-link" href="fonte.php">8</a></li>
    <li class="page-item"><a class="page-link" href="cooler.php">9</a></li>
    <li class="page-item">
    </li>
  </ul>
</nav>
</div>
</body> 
</html>