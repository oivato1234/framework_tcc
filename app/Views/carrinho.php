<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
</head>
<body>
<div class="title">
           <h2>Pc Gamer Intel</h2>
           <img src="imgs/carrinho.png"/>   
          </div>
          <a class= "voltar" href="menu.php"><b>Voltar</b></a>
       <h3 class="title-pc">PC Gamer</h3>
       <div class="itens-container">

       
<?php 

include ('csscarrinho.php');
//Array multidimensional
$itens = array (['image'=>'imgs/proci7.png', 'nome'=>'Processador', 'preco'=>'998.90'],
                ['image'=>'imgs/placa_mae.png', 'nome'=>'Placa Mãe', 'preco'=>'899.90'],
                ['image'=>'imgs/placa_de_video.png', 'nome'=>'Placa De Vídeo', 'preco'=>'799.90'],
                ['image'=>'imgs/cooler.png', 'nome'=>'Cooler', 'preco'=>'89.90'],
                ['image'=>'imgs/ram.png', 'nome'=>'Memória Ram', 'preco'=>'249.90'],
                ['image'=>'imgs/ssd2.png', 'nome'=>'SSD Sata', 'preco'=>'349.99'],
                ['image'=>'imgs/ssd.png', 'nome'=>'SSD NVMe', 'preco'=>'298.99'],
                ['image'=>'imgs/gabinete.png', 'nome'=>'Gabinete', 'preco'=>'199.90'],
                ['image'=>'imgs/fonte.png', 'nome'=>'Fonte', 'preco'=>'399.99'],
                ['image'=>'imgs/teclado.png', 'nome'=>'Teclado', 'preco'=>'99.90'],
                ['image'=>'imgs/mouse.png', 'nome'=>'Mouse', 'preco'=>'89.90'],
                ['image'=>'imgs/headset.png', 'nome'=>'Headset', 'preco'=>'159.99']
 
); 

foreach ($itens as $key => $value){
?>

<div class="produto">
    <img src="<?php echo $value['image']?>"/>
    <a href="?adicionar=<?php echo $key ?>">Add ao carrinho</a>
    <p><?php echo $value['nome']?></p>
    <p2>R$ <?php echo $value['preco']?></p2>
</div>

<?php
} 
?>

<?php
//ADD CARRINHO
if(isset($_GET['adicionar'])){
$idProduto = (int) $_GET['adicionar'];
if(isset($itens[$idProduto])){
if(isset($_SESSION['carrinho'][$idProduto])){
$_SESSION['carrinho'][$idProduto]['quantidade']++;
} else {
    $_SESSION['carrinho'][$idProduto] = 
    array('quantidade'=>1,'nome'=>$itens[$idProduto]['nome'],
    'preco'=>$itens[$idProduto]['preco']);
}
echo '<script> alert("O item foi adicionado ao carrinho.");</script>';
}
}
?>

<div class="carrinho">
 <div class="ti-carrinho">
    <h2>Nova compra</h2>
    <p>
        <?php
        //Quantidade itens no carrinho
        $qt_itens = 0;
        foreach ($_SESSION['carrinho'] as $key => $value){
            $qt_itens += $value['quantidade'];
        }
        echo $qt_itens;
        ?>
    itens no carrinho<p>
 </div>   

 <div class="produtos">
    
    <?php
    //Listando os itens adicionados
    foreach ($_SESSION['carrinho'] as $key => $value) {
?>
    <div class="itens">
        <a href="?remover=<?php echo $key ?>"><img src="imgs/lixo.png"/></a>
        <div class="nome_preco">
            <h2><?php echo $value['nome']?></h2>

            <?php $preco = $value['preco']*$value['quantidade'];  ?>
            <p>R$ <?php echo number_format($preco,2,',','.'); ?></p>
    
        </div>
        <p2><?php echo $value['quantidade']?></p2>
        <hr>
    </div>
<?php
    }
?>


<?php
//Remover carrinho
if(isset($_GET['remover'][$idProduto])){
    $idProduto = (int) $_GET['remover'];
    if(isset($_SESSION['carrinho'][$idProduto]))
    {
        unset($_SESSION['carrinho'][$idProduto]);
    }
}

//Esvaziar carrinho
if(isset($_GET['finalizar'])){
    unset($_SESSION['carrinho']);
}
?>


</div>
<div class="total">
    <h2>Subtotal<p>R$
    <?php
    //Subtotal da compra
    foreach ($_SESSION['carrinho'] as $key => $value){
        $sub += $value['preco']*$value['quantidade'];
    }
    echo number_format($sub,2,',','.');
    ?></p></h2>
    
    <h2>Total<p1>R$   
        <?php
        //Total da compra
        foreach ($_SESSION['carrinho'] as $key => $value){
            $total += $value['preco']*$value['quantidade'];
        }
        echo number_format($total,2,',','.');
        ?></p1></h2> 

        <a href="?finalizar=<?php echo $key ?>"><button>finalizar</button></a>
        
    </div>
    </div>
  </div>
</body>
</html>