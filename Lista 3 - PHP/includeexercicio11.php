<?php
echo $_POST["numero"];

$n = $_POST["numero"];



$cont = 0;

//3 8 4 4 1 

$maior = $n[0];

for ($i = 0; $i < $n; $i++) {

    if ($n[$i] > $maior) {
        $maior = $n[$i];
    }
}

for ($i = 0; $i < $n; $i++) {

    if ($n[$i] == $maior) {
        $cont++;
    }
}

/*for ($i = 0; $i <= $cont; $i++) {
    
    if ($n[$i] > $n[$i + 1]) {

        $maior = $n;

    }
    else if ($maior == $n) {

    }

};*/

echo 'O número ' , $maior , ' é o maior e foi lido ' , $cont , ' vezes.';
?>