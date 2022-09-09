<?php 

 $servidor = "localhost";
 $usuario = "root";
 $senha = "";
 $nomebd = "pratica13";

 $conexao = new mysqli($servidor, $usuario, $senha, $nomebd);

 if($conexao->connect_error) {

        echo "Falha na conexão com o banco de dados!!" . $conexao->connect_error;

 } else {

        echo "Conexão com o banco de dados estabelecida com sucesso!";
 }


?>