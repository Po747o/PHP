<?php
$num= $_POST["numero"];
$soma = 0;

for($i = 0; $i <= 9; $i++){
    $soma += $num[$i];
}

echo $soma;
?>