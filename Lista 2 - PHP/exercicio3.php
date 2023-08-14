<?php
$num= $_POST["numero"];
$valor = $num;
$valor2 = 0;
for($num ; $num > 1; $num--){
  
  echo $valor , 'x' , $num - 1 , '=', $valor * ($num - 1) , '<br>';

  $valor = $valor * ($num - 1);
}

?>