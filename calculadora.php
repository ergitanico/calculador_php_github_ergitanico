<?php
$operacio = $_POST['op'];
$primerNumero = $_POST['n1'];
$segonNumero = $_POST['n2'];

if ($operacio == "s") {
    $resultado = $primerNumero + $segonNumero;
} else if ($operacio == "r") {
    $resultado = $primerNumero - $segonNumero;
} else if ($operacio == "m") {
    $resultado = $primerNumero * $segonNumero;
} else if ($operacio == "d") {
    if ($segonNumero != 0) {
        $resultado = $primerNumero / $segonNumero;
    } else {
        $resultado = "Error";
    }
}

echo $resultado;
?>
