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
left: 40em;
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
  <h2 class="texto1">Mouse</h2>
  <p class="texto1">O mouse faz parte dos periféricos do seu computador e é a parte que nos permite interagir com os objetos que aparecem na tela através de um cursor que podemos ver no monitor.</p>

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="mouse.png" class="d-block w-25"> <br><br><br><br>
      <p class="texto">O que é um mouse</p>
      <p class="texto">O mouse faz parte dos periféricos do seu computador e é a parte que no permite interagir com os objetos que aparecem na tela através de um cursor que podemos ver no monitor.</p>
    </div>
  </div>
</div>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="video" >
<video  width="500" height="500" controls>
  <source  src="mouse.mp4">
</video>
</div>
    </div>
  </div>
</div>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="mouse1.png" class="d-block w-25"><br><br><br><br>
      <p class="texto">Geralmente o mouse possui dois botões: o esquerdo é usado para abrir, arrastar, selecionar e executar funções.</p><p class="texto">Por outro lado, o direito permite acessar as funções adicionais dos comandos.</p> <p class="texto">A maioria dos mouses possui uma rodinha central conhecida como Scroll. Com ela, você pode rolar as telas ou os documentos de cima para baixo e vice-versa.</p>
    </div>
  </div>
</div>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="mouse_s_fio.png" class="d-block w-25"><br><br><br><br>
      <p class="texto">Também existem mouses sem fio que são mais fáceis de serem transportados porque não possuem cabos e você pode conectá-los através de uma conexão Bluetooth, mas eles precisam de baterias.</p>
      <p class="texto">O mouse com fio é conectado na gabinete através de uma entrada USB ou P/S2.</p>
    </div>
  </div>
</div>
  <div class="paginacao">
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
    </li>
    <li class="page-item"><a class="page-link" href="monitor.php">1</a></li>
    <li class="page-item"><a class="page-link" href="mouse.php">2</a></li>
    <li class="page-item"><a class="page-link" href="teclado.php">3</a></li>
    <li class="page-item"><a class="page-link" href="fone_de_ouvido.php">4</a></li>
    <li class="page-item"><a class="page-link" href="mousepad.php">5</a></li>
    <li class="page-item">
    </li>
  </ul>
</nav>
</div>
</body> 
</html>