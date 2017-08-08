
<?php
$x = 3;
$numbers = [1, 2, 3, 4, 5];
$result = array_map(function ($n) use ($x){
	return $n * $x;
}, $numbers);

var_dump($result);
?>