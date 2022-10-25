<?php

//Sessões
session_start();

//print_r($_REQUEST);

if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
{
// Acessa

include 'configbanco.php';


$email = $_POST['email'];
$senha = $_POST['senha'];

/*print_r('Email: ' . $email);
print_r('<br>');
print_r('Senha: ' . $senha);*/

$sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";
$result = $conexao->query($sql);

//print_r($sql);
//print_r($result);

if(mysqli_num_rows($result) < 1)
{
    /*Unset significa qualquer registro que nao exista com email e senha destroi essas variaveis */
    
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}

else{
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header('Location: menu.php');
}


}
else
{
    //Não Acessa
   header('Location: login.php');
}
?>