<script>

    function deletar() {
        ok = confirm("Tem certeza que deseja deletar estes dados??");
        if(ok){
            return true;
        } else {
            return false;
        }
    }

</script>

<?php 

require_once('pratica14.php');

try {
    
    $sql = "SELECT * FROM aluno";

    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    
    $retorno = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
    echo "<table border='1' cellpadding='4' style='border:3px solid #098; width:800px;'>
          <tr style='background-color:#389;'>
          <th> ID </th>
          <th> Nome </th>
          <th> E-mail </th>
          <th> Telefone </th>
          <th> Data de Nascimento </th>
          <th colspan='2'> Ação </th>
          </tr>";

    foreach ($stmt->fetchAll() as $retorno => $linha) {
        
        echo "<tr>";
        echo "<td>" . $linha['id_aluno'] . "</td>";
        echo "<td>" . $linha['nome'] . "</td>";
        echo "<td>" . $linha['email'] . "</td>";
        echo "<td>" . $linha['telefone'] . "</td>";
        echo "<td>" . $linha['data_nasc'] . "</td>";

        echo "<td> 
                <form action='pratica19.php' method='post' name='del'>
                    <input type='hidden' id='id' name='id' value='" . $linha['id_aluno'] . "'/>
                    <input type='submit' id='excluir' name='excluir' value='EXCLUIR' 
                    style='margin-bottom:-15px; background-color:#E23;' 
                    onclick='return deletar()'/>
                </form>
              </td>";
        
        echo "<td> 
              <form action='pratica20.php' method='post' name='edit'>
                  <input type='hidden' id='id' name='id' value='" . $linha['id_aluno'] . "'/>
                  <input type='submit' id='editar' name='editar' value='EDITAR' 
                  style='margin-bottom:-15px; background-color:#2E3;'/>
              </form>
            </td>";

        echo "</tr>";

    }
    
    echo "</table>";

} catch (PDOException $e) {
    
    echo "Falha ao listar os dados! " . $e->getMessage();

}

$conexao = null;

?>