<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
?>
<pre>
<?php echo "Started Learning PHP "; 
echo "\n --For now i understood the basic syntax of PHP And how to run PHP code in HTML file";
echo "\n --Learned Commenting and Variables in PHP";
echo "\n --String Integer Float Boolean Array Along with Some new like Object ,NULL and Resource";

?>

<h1>Variables </h1>

<?php
var_dump(5);
var_dump("John");
var_dump(3.14);
var_dump(true);
var_dump([2, 3, 56]);
var_dump(NULL);
$x = $y = $z = "Fruit";//assign same value to multiple variables

echo " $x \n $y \n $z";

//use global keyword to access global variable inside function
$x = 5;
$y = 10;
function myTest() {
    global $x, $y;
    $y = $x + $y;
}
myTest();
echo "\n$y\n\n"; // outputs 15

//pass by reference using & operator
function add_five(&$value) {
    $value += 5;
}
$num = 2;
add_five($num);
echo $num;//outputs 7
?>
<h1>Global array</h1>

<?php
$x = 523;
$y = 10;

function myTest1() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest1();
echo $y; // outputs 15
?>


<h1>Arrays</h1>
<?php 
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>


<h1>Classes n Object</h1>
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return " My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("red", "Volvo");
var_dump($myCar);
?><br>
<?php

echo $myCar->message();
?>



<h1>Strings</h1>
<?php 
echo strlen("Hello world!");
echo "<br>";
echo str_word_count("Hello world!");
echo "<br>";
echo strpos("Hello world!", "world");
echo "<br>";
$x = "Hello World!";
echo strtoupper($x);
echo strtolower($x);
echo "<br>";
$x = "Hello World!";
echo str_replace("World", "Dolly", $x);
echo "<br>";
echo strrev($x);
echo "<br>";
$x = " Hello World! ";
echo trim($x);
echo "<br>";echo "<br>";
$x = "Hi, how are you?";
echo substr($x, 5, -3);
?>

<?php
$x = "Hello World!";
$y = explode(" ", $x);

//Use the print_r() function to display the result:
print_r($y);
echo $y[0];
echo "<br>";echo "<br>";

$x = "We are the so-called \"Vikings\" from the north.";
echo $x;

?> 

<a href="https://www.w3schools.com/php/php_string_escape.asp" target="_blank">Escape Characters</a>
</pre>
</body>
</html>