<!DOCTYPE html>
<html>
<body>

<?php
$soma = 0;
$num = $_POST["numero"];

for ($i = $num; $i >= 0; $i--) {
    
    $soma += $num;
    $num = $num - 1;

};

    echo 'A soma dos números naturais anteriores é ' , $soma , '.'

?>
</body>
</html>