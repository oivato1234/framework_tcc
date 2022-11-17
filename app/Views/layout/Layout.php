<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/cssbot.css">
    
</head>
<body>
    <?php
    $this->rendersection('menu');
    $this->rendersection('conteudo');
    ?>
    <header class="cabecalho">
<nav class="cabecalho-menu">
</nav>
</header>

<main class="conteudo">
<section class="conteudo-principal">
  <div class="conteudo-principal-escrito">
    <h1 class="conteudo-principal-escrito-titulo">Chat Bot</h1>
    <h2 class="conteudo-principal-escrito-subtitulo">Tire todas as suas dúvidas com o nosso chat</h2>
<a class="conteudo-principal-escrito-botao" href="https://wa.me/14155238886">Iniciar Chat</a>
  </div>
  <img class="conteudo-principal-imagem"src="imgs1/bot.gif" alt="Imagem chat bot">
</section>

<section class="conteudo-secundario">
  <h3 class="conteudo-secundario-titulo">O que fazemos por você?</h3>
  <p class="conteudo-secundario-paragrafo">1. Sistema de verificação capcha para novos usúarios garantirem que não são robôs</p>
  <p class="conteudo-secundario-paragrafo">2. Auxilio na montagem de computadores</p>
  <p class="conteudo-secundario-paragrafo">3. Sistema de avisos, para novas atualizações</p>
</section>
</main>

<footer class="rodape">
<img class="rodape-imagem" src="imgs1/footer.png">
</footer>
    </body>
</html>