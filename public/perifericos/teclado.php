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
  <h2 class="texto1">Teclado</h2>
  <p class="texto1">O teclado é um periférico de entrada e um dos principais de um computador. Ele nos permite ativar comandos, substituir o mouse em algumas funções além de digitar palavras, sinais, símbolos e números. A maioria deles é dividida em cinco partes de teclas: as de função, as especiais e de navegação, as de controle, as de digitação e as alfanuméricas.</p>

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="teclado1.png" class="d-block w-25">
      <img src="teclado.png" class="d-block w-25">
      <p class="texto">As teclas de função são a primeira linha localizada na parte superior do teclado. São aquelas teclas que vão de F1 a F12, além de outras, e que servem para funções muito específicas como atalhos.</p><p class="texto">Já as especiais e as de navegação ajudam na navegação das páginas webs. End, Home, Page up e Page down estão entre elas.</p>
    </div>
  </div>
</div>
<p class="texto1">As teclas de controle são aquelas usadas em combinação com outras para ativar determinadas funções. A logo do Windows, Ctrl, Esc e Alt são exemplos delas. E por fim têm as de digitação e alfanuméricas que são as letras, os números, os símbolos e a pontuação. Há também o teclado apenas numérico, localizado na parte direita, que dispõe dos números, e alguns símbolos, organizados na forma de uma calculadora.</p>

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