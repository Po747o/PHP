<?php
$n = $_POST["numero"]; //Recebe a quantidade total de números fornecida pela usuário

?>

<html>
<form method="post" action="exercicio11include.php"> <!--Faz a comparação de cada número para checagem do maior-->

<?php
for ($i = 0; $i < $n; $i++) {

    include "exercicio11include.html";

};
?>

<input class="botao" type="submit" value="Checar">
</form>
</html>