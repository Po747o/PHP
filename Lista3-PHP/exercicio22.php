<?php
$quant = $_POST["numero"];
$num1 = 0;
$num2 = 1;
$atual;

echo "0<br />1<br />";

for($i = 1; $i < $quant - 1; $i++){
   $atual = $num1 +$num2;
    echo $atual,"<br />";
   
    $num1 = $num2;
    $num2 = $atual;
}


?>