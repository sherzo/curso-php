<?php

echo '<p>Text from functions.php</p>';

function sum($a, $b) {
    $result = $a + $b;
    echo '<p>Result: ' . $result . '</p>';
}

/*
En este video vamos a hablar sobre cómo cargar archivos externos. Como ustedes pueden imaginar, cuando un proyecto va creciendo tener todo nuestro código en un solo archivo es muy complicado.
Php nos ofrece la posibilidad de agregar archivos externos.
Un ejemplo de esto es el uso de include y require
<?php
include ‘functions.php’;
require ‘functions.php’;
echo ‘
Text from index.php
;
Estos métodos funcionan de forma similar, pero cuando usamos include para traer un archivo externo y existe algún error nuestro código no se detendrá. A diferencia de cuando usamos require que sí se detendrá por completo.
Si ejecutamos include, vamos a ver que ambos textos son llamados a un solo archivo.
Un problema que se puede presentar cuando se incluye múltiples veces un archivo es cuando declaramos funciones.
Index.php
<?php
include ‘functions.php’;
echo ‘
Text from index.php
’;
sum(50, 20);
?>
Functions.php
<?php
echo ‘
Text from index.php
’;
function sum($a, $b){
$result = $a + $b;
echo '
Result: ’ . $result . ‘
’;
}
?>
*/