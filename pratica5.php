<?php 

 // Trabalhando com Arrays 

 /* $carros = array (
    'Opala', 'Uno', 'Porsche', 'BMW', 'Comodoro', 'Fusca', 
    'Chevete', 'Skyline', 'Batmóvel', 'Lamborghini', 'Delorean' ); */

 $carros = [
            'Opala', 'Uno', 'Porsche', 'BMW', 'Comodoro', 'Fusca', 
            'Chevete', 'Skyline', 'Batmóvel', 'Lamborghini', 'Delorean'
            ];

    // echo $carros[7];
    // echo count($carros);

    $dados = count($carros);

    sort($carros); // Ordem Alfabética

    echo "<ul>";

    for ($i = 0; $i < $dados; $i++) { 
        
        echo "<li>" . $carros[$i] . "</li>";
    }

    echo "</ul>";

?>