<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body {
   font-family: Arial, Helvetica, sans-serif;
   background-image:url(https://img5.goodfon.com/wallpaper/nbig/6/17/strelka-sinii-fon-linii-geometriia-goluboi.jpg);
        }

        h2 {
            position: absolute;
            left: 35%;
            top: 11px;
        }

            
        .tela-login {
         background-color: rgba(0, 0, 0, 0.9);
         position: absolute;  
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         padding: 80px;
         border-radius: 15px;
         color: white; 
        }

        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;

        }

        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            
        }

        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;


        }

        .cadastro{
            background-color: #8B8989;
            border: none;
            padding: 5px;
            width: 100%;
            border-radius: 20px;
            color: white;
            font-size: 15px;

        }

        .voltar{
position: fixed;
top: 2;
background-color: rgba(0, 0, 0, 5);
border-radius: 20px;
text-decoration: none;
color: #DCDCDC;
border: 2px solid dodgerblue;
padding: 8px;

}

.voltar:hover{
    background-color: #32CD32;
}

.esqueci{
    position: relative;
  text-align: center;  
  text-decoration: underline;
color: white; 

 
}
     

    </style>
</head>
<body> 
    <?php
   
           include 'bancocadastro.php';
           include "configbanco.php";
           
?>
 <a class= "voltar" href="home.php"><b>Voltar</b></a>
    <div class="tela-login">
    <h2><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg> Login</h2>
    <form action="bancologin.php" method="POST">
    <input  type="text" name="email" placeholder="Email">
    <br><br>
    <input type="password" name="senha" placeholder="Senha">
    <br><br>
   <input class="inputSubmit" type="submit" name="submit" value="Acessar">
    </form> <br>
      <a class="esqueci" a href=""> <h4>Esqueci minha senha</h4> </a>   
    </div>
   

  
   


</body>
</html>