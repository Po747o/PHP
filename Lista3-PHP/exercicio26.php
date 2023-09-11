<?php
$saque = $_POST["saque"];
$cem = 0;
$cinquenta = 0;
$vinte = 0;
$dez = 0;
$cinco = 0;
$dois = 0;
$um = 0;

if ($saque > 0) {

    while ($saque > 0) {

        if ($saque % 100 == 0) { //Conta uma nota cem e reduz cem do valor de saque

            $saque -= 100;
            $cem++;

        } else if ($saque % 50 == 0) { //Conta uma nota cinquenta e reduz cinquenta do valor de saque

            $saque -= 50;
            $cinquenta++;

        } else if ($saque % 20 == 0) { //Conta uma nota vinte e reduz vinte do valor de saque

            $saque -= 20;
            $vinte++;

        } else if ($saque % 10 == 0) { //Conta uma nota dez e reduz dez do valor de saque

            $saque -= 10;
            $dez++;

        } else if ($saque % 5 == 0) { //Conta uma nota cinco e reduz cinco do valor de saque

            $saque -= 5;
            $cinco++;

        } else if ($saque % 2 == 0) { //Conta uma nota dois e reduz dois do valor de saque

            $saque -= 2;
            $dois++;

        } else if ($saque % 1 == 0) { //Conta uma nota um e reduz um do valor de saque

            $saque -= 1;
            $um++;
        }
    }
}

if ($cem > 0) {
    echo 'Cédula(s) de cem reais utilizadas: ' . $cem . "</br>";
}
if ($cinquenta > 0) {
    echo 'Cédula(s) de cinquenta reais utilizadas: ' . $cinquenta . "</br>";
}
if ($vinte > 0) {
    echo 'Cédula(s) de vinte reais utilizadas: ' . $vinte . "</br>";
}
if ($dez > 0) {
    echo 'Cédula(s) de dez reais utilizadas: ' . $dez . "</br>";
}
if ($cinco > 0) {
    echo 'Cédula(s) de cinco reais utilizadas: ' . $cinco . "</br>";
}
if ($dois > 0) {
    echo 'Cédula(s) de dois reais utilizadas: ' . $dois . "</br>";
}
if ($um > 0) {
    echo 'Moeda(s) de um real utilizadas: ' . $um . "</br>";
}

?>