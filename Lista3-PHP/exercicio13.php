<?php

$n = $_POST["numero"];

echo 'Este(s) número(s) é(são) divisor(es) de ' , $n , '.';

for ($i = 0; $i <= $n; $i++) {

    if ($n % 3 == 0) {
        echo $n ."</br>";
    }
};



?>