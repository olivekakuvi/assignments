<?php
/**
 * Created by PhpStorm.
 * User: emobilis
 * Date: 5/31/19
 * Time: 9:50 AM
 */

//variables in php
//variables are containers for information
$name = "Jabali";
echo $name;

$text = "php is awesome";
echo $text;

$num1 = 100;
$num2 = 50;

echo $num1 + $num2;
#how to add html into php
echo "<header>
<h1>welcome</h1> 
</header>";

//php is loosely types
$float_number = 10.23; #floats are numbers that have decimal points
$integer_number = 1023;#
$text = "php is awesome";#a srtring - any text inclosed
$isHappy = false;#boolean
$isSad = true;#boolean

//php variables scope
//variables can be declared anywhere in php
//the scope of a variable is the part of the script where the variable can be used or referenced
     #local
     #global
     #static


$x = 5; //global variable
function myText(){
    global $x;
    $sentence ="Welcome to php class";
    echo "Hello world $x";

}

myText();

#php data types
//variables store different types of data types
      #1.String
      #2.Integer
      #3.Float
      #4.Boolean
      #5.Array
      #6.Object
      #7.NULL
      #8.Resource

#php String
$name = "Developer";
var_dump($name);
echo "<br>";
echo strlen($name);
echo "<hr>";
echo str_word_count("Hello world");
echo "<hr>";
echo strrev("Hello world");
echo str_replace("world", "Kenya","Hello world);

?>");