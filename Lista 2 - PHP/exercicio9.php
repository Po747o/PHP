<?php
$nome= $_POST["nome"];
$idade= $_POST["idade"];

if($idade >= 18 ){
    echo $nome , ' é maior de idade e tem ' , $idade , ' anos.';
}else{
    echo $nome , ' não é maior de idade e tem ' , $idade , ' anos.';
}

?>