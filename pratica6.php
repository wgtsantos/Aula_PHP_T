<?php 

// Arrays Associáveis 

$alunos = [
            "Fábio"=>"18", "Ana"=>"19", "Priscila"=>"17", "Gabriel"=>"26",
            "Leonardo"=>"32", "Hicaro"=>"82", "Raquel"=>"15", "Carol"=>"18",
            "Fernanda"=>"17", "China"=>"99", "Gustavo"=>"23", "André"=>"11"
        ];

    // echo $alunos["China"];

    $num = count($alunos);

    echo "<table border='1' width='400'>
            <tr bgcolor='lightblue'>
            <th> Nome </th>
            <th> Idade </th>
            </tr>" ;

    foreach ($alunos as $nome => $idade) {
        
        echo "<tr align='center'>";
        echo "<td> $nome </td> <td> $idade </td>"; 
        echo "</tr>";
    }

    echo "</table>";

?>