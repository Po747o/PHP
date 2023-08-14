<?php
$num= $_POST["numero"];

for($i ; $i <= 10; $i++){
  echo $num , 'x' , $i , '=', $num * $i , '<br>';
}

?>