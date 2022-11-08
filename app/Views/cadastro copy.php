<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Cadastro</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
           background-image: url(https://img5.goodfon.com/wallpaper/nbig/6/17/strelka-sinii-fon-linii-geometriia-goluboi.jpg)
            /*background-image: linear-gradient(to right,#EB8237,#062454,#F6F3F3,#062454,#EB8237);*/
         
        
          
        }
        .box00{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 2.0em;
            border-radius: 30px;
            width: 40%;
        }
        fieldset{
            border:groove 5px #1E90FF;
        }
        legend{
            border: 2px solid dodgerblue;
            padding: 15px;
            text-align: center;
            background-color: #32CD32;
            border-radius: 10px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid whitesmoke;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 1px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: #00BFFF;
        }
     
        #submit{
            background-image: linear-gradient(to right, #083A76,#32CD32,#32CD32,#083A76);
            width: 100%;
            border: none;
            padding: 17px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 15px;
        }
        #submit:hover{
            background-image: linear-gradient(to bottom right,#32CD32 ,#32CD32 ,#083A76,#083A76,#32CD32 ,#32CD32 );
        }

        .campo label {
    margin-bottom: 0.2em;
    color: white;
    display: block;
}

fieldset.grupo .campo {
    float:  left;
    margin-right: 1em;
}



.campo select option {
    padding-right: 1em;
}

.campo input:focus, .campo select:focus, .campo textarea:focus {
    background: #32CD32;
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
    </style>
</head>
<body>
    <?php
    include "configbanco.php";
    include "bancocadastro.php";
    include "script.php";
    //include "bootstrap.php";
    //include "botao.php";

    ?>
<a class= "voltar" href="home.php"><b>Voltar</b></a>
<div class="box00">
        <form name="cadastro" action="" method="POST" onsubmit="return confirmar()">
            <fieldset>
                <legend><b>Cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br>
                    <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br>
                <br>
                <div class="campo">
                <label for="nivel_conhecimento">Nível de Conhecimento</label>
                <select name="nivel_conhecimento"  id="nivel_conhecimento" required>
                  <option selected disabled value="">Selecione</option>
                  <option value="Iniciante">Iniciante</option>
                  <option value="Intermediário">Intermediário</option>
                  <option value="Avançado">Avançado</option>
                </select>
                
            </div>
            <br>
            <div class="campo">
                <label for="genero">Sexo</label>
                <select name="genero" id="genero" required>
                  <option selected disabled value="">Selecione</option>
                  <option value="Masculino">Masculino</option>
                  <option value="Feminino">Feminino</option>
                </select>
                <br><br>
           <input type="submit" name="submit" id="submit" value="Concluído">
            </fieldset>
        </form>
    </div>
</body>
</html>

