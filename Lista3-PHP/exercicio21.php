<?php
$num1 = $_POST["numero1"];

if ($num1 < 0) {
    echo 'numero negativo digitado, algoritmo encerrado ';
    echo $num1;
} else {
    include 'exercicio21include.php';

}

?>