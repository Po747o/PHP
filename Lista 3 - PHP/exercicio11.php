<?php
$n = $_POST["quant"];
$total = array($n);

for ($i = 0; $i < $n; $i++){

    include "includeexercicio11.html";

};
?>
//3 4 4 2 1 5 
<html>
<input class="botao" type="submit" value="Checar">
</html>

<?php
include "includeexercicio11.html";

for ($n; $n <= 4; $n++) {
    
    if ($total[$n] > $total[$n + 1]) {

        $maior = $n;

    }
    else if ($maior) {

    }

};

echo 'O número ' , $maior , ' é o maior e foi lido ' , $lido , ' vezes.';

?>