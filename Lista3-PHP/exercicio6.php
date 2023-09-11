<?php
$num1 = $_POST["numero1"];
$num2 = $_POST["numero2"];

for ($i = 0; $i < $num2; ) {
     $num1 += 1;

     if ($num1 % 2 != 0) {
          echo $num1, '<br>';
          $i++;
     }
}

?>