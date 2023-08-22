   <?php
$num= $_POST["numero"];
echo $num , '<br>';
    // Verifica se o campo foi preenchido
    if (isset($num) && is_numeric($num)) {

        // Verifica se o número é positivo, negativo ou igual a zero
        if ($num > 0) {
            echo "Valor Positivo";
        } elseif ($num < 0) {
            echo "Valor Negativo";
        } else {
            echo "Igual a zero";
        }
    } else {
        echo "Por favor, digite um número válido.";
    }

?>