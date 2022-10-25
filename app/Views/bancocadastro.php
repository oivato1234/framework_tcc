<?php
if(isset($_POST['submit']))
{

    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $cidade= $_POST['cidade'];
    $estado = $_POST['estado'];
    $nivel_conhecimento = $_POST['nivel_conhecimento'];
    $genero = $_POST['genero'];
  

    $result = mysqli_query($conexao, "INSERT INTO usuarios (nome,email,senha,telefone,cidade,estado,nivel_conhecimento,genero)
    VALUES ('$nome','$email','$senha','$telefone','$cidade','$estado','$nivel_conhecimento','$genero')");
     
    header('Location: login.php');
} 
    
    ?>
