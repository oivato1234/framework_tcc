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
  <h2 class="texto1">Fone de ouvido</h2>
  <p class="texto1">Headset, também conhecido como fone operador, fone de cabeça, headfone ou handsfree é um conjunto formado por um fone de ouvido com controle de volume e um microfone acoplado para utilização em computadores multimídia e sistemas de telemarketing, devido à facilidade e praticidade que ele possui.</p>

  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="headset.png" class="d-block w-25">
      <p class="texto">Ele se tornou popular especialmente pelos trabalhos que são associados ao telefone e à digitação simultânea, visto que permite ao usuário ter as mãos livres para poder atender a uma chamada.</p><p class="texto" >O dispositivo é amplamente utilizado em centrais de atendimento e recentemente passou a ganhar os usuários domésticos e gamers, devido à variedade de opções no mercado que baratearam sua compra.</p>
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