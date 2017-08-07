<?php

/*

Arrays
En este video vamos a hablar sobre cómo podemos usar los operadores que ya aprendimos, pero aplicados en arreglos.
Para este ejemplo vamos a utilizar dos arreglos:
<?php
$array1 = [
0 => ‘a’,
1 => ‘b’,
2 => ‘c’,
];
$array2 = [
3 => ‘d’,
4 => ‘e’,
];
Ahora bien, si utilizamos valores similares para comparar los valores que tenemos dentro de los arreglos tendríamos la siguiente información:
<?php
$array1 = [
0 => ‘a’,
1 => ‘b’,
2 => ‘c’,
];
$array2 = [
‘a’, ‘b’, ‘c’
];
$result = $array1 == $array2;
var_dump($result);
Nos daría que son iguales, y si usamos el triple igual === nos arrojaría lo mismo. Porque todos los valores y los tipos de datos coinciden.
Si cambiáramos los valores porque el orden de los valores no coincidirían.

*/
$array1 = [
    1 => 'b',
    2 => 'c',
    0 => 'a'
];

$array2 = ['a', 'b', 'c'];

var_dump($array1 == $array2);
