<?php
$num1 = $_POST["numero1"];
$soma = $num1;

for ($i = 0; $i < 50; ) {
     $num1 += 1;

     if ($num1 % 2 == 0) {
          echo $num1, '<br>';
          $soma += $num1;
          $i++;
     }


}

echo '<br>Valor da soma final: ', $soma;

?>