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
  <h2 class="texto1">Gabinete(CPU)</h2>
  <p class="texto1">Gabinete: é a parte do computador que todo mundo vê, ou seja, aquela “caixa” metálica formada por partes plásticas cuja função é manter cada peça em seu lugar. </p>

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="gabinete.png" class="d-block w-25"> <br><br><br><br>
      <p class="texto">Como é um Gabinete</p>
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