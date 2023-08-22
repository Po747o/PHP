<?php
$nota[0]= $_POST["nota1"];
$nota[1]= $_POST["nota2"];
$nota[2]= $_POST["nota3"];
$media = ($nota[0] + $nota[1] + $nota[2]) / 3;
if($media >= 60 ){
    echo ' Aprovado com média ' , $media;
}else{
    echo ' Reprovado com média ' , $media;
}

?>