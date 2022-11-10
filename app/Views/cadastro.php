<body>
    <?php

    include "configbanco.php";
    include "bancocadastro.php";
    include "script.php";
    //include "bootstrap.php";
    //include "botao.php";
    $this->extend('Layout/cadastro')
    
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

