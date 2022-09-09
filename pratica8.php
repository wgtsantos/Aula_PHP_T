<?php

$nome = $_POST['nome'];
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

$total = $num1 * $num2;

echo "<h2> Prezado(a) $nome, o resultado do cálculo é $total </h2>";

?>