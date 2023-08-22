<?php
$num = $_POST["numero"];

if ($num % 2 == 0) {
    echo 'Digite um número ímpar!';

}else {

    for ($i = 1; $i <= $num; $i++) {
    
        if ($i % 2 == 1) {
            echo $i , '<br>';
        }
    
    };
}

?>