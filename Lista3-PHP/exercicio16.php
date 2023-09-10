<?php
$n = $_POST["numero"];
$h = 0;

for ($i = 1; $i <= $n; $i++) {
$h += 1 / $i;
}

echo 'O número harmônico de ' . $n . ' é: ' . $h;

?>