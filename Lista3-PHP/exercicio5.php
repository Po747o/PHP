<?php
$num[0] = $_POST["numero1"];
$num[1] = $_POST["numero2"];
$num[2] = $_POST["numero3"];
$num[3] = $_POST["numero4"];
$num[4] = $_POST["numero5"];
$num[5] = $_POST["numero6"];
$num[6] = $_POST["numero7"];
$num[7] = $_POST["numero8"];
$num[8] = $_POST["numero9"];
$num[9] = $_POST["numero10"];
$valida = $num[0];
$valida2 = $num[0];

for ($i = 0; $i <= 9; $i++) {
   if ($valida > $num[$i]) {
      $valida = $num[$i];
   }

   if ($valida2 < $num[$i]) {
      $valida2 = $num[$i];
   }
}

echo $valida, ' é o maior numero <br>', $valida2, ' é o menor número';
?>