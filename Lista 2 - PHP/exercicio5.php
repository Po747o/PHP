<?php
$num= $_POST["numero"];

if($num  % 2 == 0){
    echo $num , ' é par';
}else{
    echo $num , ' é impar';
}


?>