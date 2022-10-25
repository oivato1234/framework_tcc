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
  <h2 class="texto1">Mouse Pad</h2>
  <p class="texto1">O mouse pad é um acessório que pode facilitar muito o uso do seu PC ou notebook no dia a dia, viu? Ele é aquela almofadinha que ajuda o mouse a deslizar e fazer os movimentos certos pra mandar comandos pro computador.</p>

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="mousepad.png" class="d-block w-25"><br>
      <p class="texto">O mouse pad é um tipo de apoio que parece uma almofada e que deve ficar embaixo do seu mouse pra fazer ele deslizar melhor. Mas, além disso, o mouse pad tem outra função muito importante: proteger suas mãos contra calos e alguns podem até mesmo vir com uma área mais alta, pro conforto do seu pulso! Demais, né?</p>
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