<?php 

 // Funções 

 function frase() {
    echo "Esta é uma frase dentro de uma função!";
 }

 frase();

 echo "<br/>";

 // Funções com Argumentos 

 function textos($nome, $jogo) {

    echo "<h3> Meu nome é $nome e adoro jogar $jogo !! </h3>";

 }

 textos("China", "LOL");

 echo "<br/>";

 function calc($a, $b) {
    return $a * $b;
 }

 echo "O resultado desta multiplicação é " . calc(5, 6);

?>