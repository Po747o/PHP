<?php
$num1 = $_POST["numero1"];
$num2 = $_POST["numero2"];
$soma = 0;
$produto = 0;
$i = ($num2 - $num1) + 1;
for ($j = 0; $j < $i; $j++) {


    if ($num1 % 2 == 0) {
        $soma += $num1;

    } else {
        if ($produto == null) {
            $produto = $num1;
        } else {
            $produto = $produto * $num1;
        }
    }
    $num1++;

}

echo '<br>Valor da soma final: ', $soma;
echo '<br>Valor do produto final: ', $produto;

?>