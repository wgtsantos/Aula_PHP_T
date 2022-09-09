<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "";
$nomebd = "pratica13";

try {
    
    $conexao = new PDO("mysql:host=$servidor; dbname=$nomebd", $usuario, $senha);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão estabelecida com sucesso!!";


} catch (Exception $e) {
    
    echo "Falha ao conectar com a base de dados!! " . $e->getMessage(); 

}

?>