<?php
$num = $_POST['numero'];
$v = array(1);
while (($s = count($v)) <= $num) {
    echo implode('', $v) . "<br>";
    $m = max($v);
    $v = range($m + 1, $s + $m + 1);
}
?>