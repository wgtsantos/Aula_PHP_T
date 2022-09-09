<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Prática 11 - Formulário </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

     <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

     <label> Nome: </label>
     <input type="text" id="nome" name="nome" />
     <br/> <br/>
     <label> E-mail: </label>
     <input type="email" id="mail" name="mail" />
     <br/> <br/>
     <label> Telefone: </label>
     <input type="tel" id="telefone" name="telefone" />
     <br/> <br/>
     <input type="submit" id="enviar" name="enviar" value="ENVIAR"/>

    </form>

    <h2> Dados informados: </h2>

    <?php 
        $nome = $email = $telefone = "";

        if($_SERVER['REQUEST_METHOD'] == "POST") {

            $nome = verificar($_POST['nome']);
            $email = verificar($_POST['mail']);
            $telefone = verificar($_POST['telefone']);

            echo "<strong> Nome: </strong> $nome <br/>";
            echo "<strong> E-mail: </strong> $email <br/>";
            echo "<strong> Telefone: </strong> $telefone <br/>";

        }

        function verificar($dados) {
            $dados = trim($dados); // Filtrar espaços Desnecessários 
            $dados = stripcslashes($dados); // Filtrar barras invertidas
            $dados = htmlspecialchars($dados); // Ignorar códigos e tags 

            return $dados;
        }
    
    ?>

    </body>
</html>