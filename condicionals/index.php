<?php
/*

Estructuras Condicionales
Los condicionales en PHP son por ejemplo:
if
If nos permite determinar si algo es verdadero, por ejemplo:
<?php
$color = ‘red’;
If ( $color = ‘red’) {
echo ’The color is red’;
}
También podemos usar otro condicional que es else:
<?php
$color = ‘red’;
If ( $color = ‘red’) {
echo ’The color is red’;
}
else {
echo ‘The color is not red’;
}
Además podemos usar elseif que nos permite hacer nuevas comparaciones:
<?php
$color = ‘red’;
If ( $color == ‘red’) {
echo ’The color is red’;
}
elseif {
echo ‘The color is not red’;
}
elseif ($color == ‘purple’) {
echo ’The color is purple’;
}
else {
echo ’The color is either red nor purple’;
}
?>
Además existe otra estructura de control llamada switch, este funciona de manera muy similar a ifs anidados.
<?php
$color = ‘red’;
switch($color) {
case ‘blue’:
echo ‘Color is blue’;
break;
case ‘red’:
echo ‘Color is red’;
break;
}
Con switch podemos utilizar además el caso default: que se ejecuta cuando ninguno de los casos que hemos definido anteriormente.
<?php
$color = ‘red’;
switch($color) {
case ‘blue’:
echo ‘Color is blue’;
break;
case ‘red’:
echo ‘Color is red’;
break;
default:
echo ‘Other’;
}

*/
$color = 'green';

switch($color) {
    case 'blue':
        echo 'Color is blue';
        break;
    case 'red':
        echo 'Color is red';
        break;
    default:
        echo 'Other';
        break;
}