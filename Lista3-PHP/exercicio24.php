<?php
$chico = 1.50;
$ze = 1.10;
$ano = 0;


while($chico >= $ze){
   $chico += 0.02;
   $ze += 0.03;
   $ano++;

   echo 'Ano: ', $ano, ' Chico: ', $chico, ' Zé: ', $ze, '<br>';
}

echo 'Após ', $ano, ' Zé será maior que Chico'
?>