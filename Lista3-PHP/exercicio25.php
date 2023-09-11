<?php
$ano = 0;
$salario = 2000; //Salário em 1995
$aumento = 0.015; //1.5%

for ($ano = 1996; $ano <= 2023; $ano++) {

    $salario = $salario + ($salario * $aumento);
    $aumento = $aumento * 2;

    echo 'O salário do funcionário no ano de ' . $ano . ' será de ' . $salario . "</br>" . "</br>";
}


?>