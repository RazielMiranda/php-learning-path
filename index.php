<?php 
//My php intro


$text = "Outputs words";
$y = 2;
$x = 22;

print "<h1>echo vs print</h1>";

echo $x / $y;
echo ($x / $y);
print $x / $y;
print ($x / $y);

print("<p>more or less different ".$text);

echo "<hr>";

echo '<h1>Studies about type of variables</h1>';

$intVal = 1248765342148;
$floatVal = 1232.764;
$falseVal = false;
$trueVal = true;
$arrayVal = array('PHP',7,'is very', "COOL!");

$notNullVal = 'hey i am not null ';
echo $notNullVal;
$notNullVal = null;
echo 'Now is null '.$notNullVal;

var_dump($intVal);
var_dump($floatVal);
var_dump($falseVal, $trueVal);
var_dump($arrayVal);

echo '<hr>';

echo '<h1>String PHP functions </h1>';

echo 'Hello world, size of string = '.strlen('Hello world  ').'Number of word = '.str_word_count('Hello world   ').strrev(' Hello world  ').strpos("Hello world  ", "world  ");

echo str_replace("you need to update  ","changed  ","Hello missed you need to update  ");

$linkStringReference = 'https://www.w3schools.com/php7/php7_ref_string.asp';
echo "<h3> All function reference >> $linkStringReference </h3>";
echo "<hr>";
echo "<br>";
?>