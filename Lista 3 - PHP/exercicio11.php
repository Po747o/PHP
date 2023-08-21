<?php
$n = $_POST["quant"];
array($n);

?>

<html>

<form method="post" action="includeexercicio11.php">
    <?php
for ($i = 0; $i < $n; $i++) {

    include "includeexercicio11.html";

};
    ?>
    <input class="botao" type="submit" value="Checar">
</form>

</html>