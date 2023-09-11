<?php
$n = $_POST["numero"];

echo 'Este(s) número(s) é(são) divisor(es) de ', $n, ': ' . "</br>";

for ($i = 1; $i <= $n; $i++) {

    if ($n % $i == 0) {
        echo $i . "</br>";
    }
}
;

?>