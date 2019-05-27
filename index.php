<?php 
//My php intro

//Global Variables
$x = 10;
$y = 2;
$z = $x + $y;
$a = 2;
$name = "Raziel ";
$last_name = "Miranda";


echo "<h1>Hello world</h1>";
echo "<p>Price of bread = $x</p>";
echo "<p>Price of cheese = $y</p>";
echo "<p>final count = $z, Thank you Mr - ".$name.$last_name." Come back ever!</p>";
echo "<p>12 / 2 = ".$z / $a."</p>";
echo "<hr>";



//Funcções
function func_localVar(){
	$x = "<h2>This variable is from the function localVariable</h2>";
	echo $x;
}

function func_globalVar(){
	global $z,$a;

	$z = $z * ($a / 100);
	echo "<p>This function acess global variable $z </p>";
}

function func_globalIndex(){
	echo $GLOBALS['x'] + $GLOBALS['y'];
}



//functions call
func_localVar();
func_globalVar();
func_globalIndex();

?>