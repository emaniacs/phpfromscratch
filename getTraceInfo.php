<?php
// get trace info
function traceCaller() {
	$e = new Exception();
	echo '<pre>';
	$x = print_r($e->getTrace(), true);
	echo $x;
	echo '</pre>';
	
}

function xx($x) {}

function caller( $x, $y) {
	xx($x);
	traceCaller();
}

caller(1, 3);

?>

