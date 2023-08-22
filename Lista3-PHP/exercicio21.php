<?php
$num1= $_POST["numero1"];

$N = 1+1+1;
$F = 0;
$E = 0;

for( $i = 1; $i <= $num1; $i++){
    echo '{' , $i , '}';
for($j = $i; $j > 0; $j--){
    $F = $j;
    echo '(' , $j , ')';
    
    if($j == 1){
        if($F == 0){
            $E = 1;
        }
    }
    if($j > 1){
        $E *= $j;
    }
    $N += 1/$F;

    
    echo '<br>' , '1/' , $F , '=', 1/$F;
}


     

 
}

echo '<br>Valor da soma final: ' , $N;

?>