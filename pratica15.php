<?php 

require_once('pratica14.php');

try {
    
    $sql = "INSERT INTO aluno(nome, email, telefone, data_nasc) VALUES 
            ('Elizabeth', 'beth@gmail.com', '31 99764535', '1904-02-09')";

    $conexao->exec($sql);

    echo "Dados Gravados com Sucesso!!";

} catch (Exception $e) {
    
    echo "Falha de conexão!! Não foi possível gravar os dados!! " . $e->getMessage();

}

$conexao = null;

?>