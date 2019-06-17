<?php


#PHP operaters
//1.Arithmetic operaters
     #Addition : +
     #Subtraction : -
     #Multiplication: *
     #Division: /
     #Modulus:%
     #Exponentioal: **

$x = 100;
$y = 7;
#addition
$z = $x + $y;
echo $z;
echo "<br>";
$a = $x % $y;
echo $a;


//2.Assignment operaters
#They are used to write a value to a variable
$s = 1;
$d = 3;
$s += 23;# $s = $s + 23;
$d -= 12;# $d = $d - 12;
$d = 12;# $d = $d * 12;
$d = 12;
$d = 12;
$d = 12;


//3.PHP Comparison Operators
#They can be used to compare a string or navbar
 $t = 1000000;
 $r = 11000000;
  //1.== equal
   echo $r == $t;
  //2.=== identical
#returns true if one variable is equal to another variable and they are of the same data types
$u = 100;#integer
$l = 12.12;#float

echo "<br>";
var_dump($u === $l);#false
echo "<br>";
var_dump($u !=$l);#true
echo "<br>";
var_dump($u >=$l);#true
echo "<br>";
echo "<br>";

//4.Increament and Decreament operators
#use them in conjuction with variables
     #++: incraement
     #--: decreament
$b = 1;
$c = 5;
echo ++$b;# 2 : pre-increamen,increaments $b by one,then returns $b
echo "<br>";
echo $c++;#5 : post increament,returns $c,then increaments $c by one
echo --$b;
echo $b--;



//4.Logical operators
//used to combine logical stetements
     //1.and : $x and $c :true if both $x and $c are true
     //2.or :$x or $c  : true if either $x or $c is true
     //3.xor: $x $c :true if either $x or $c is true but not both
     //4.&& : $x && $c :true if both $x and $c are true
     //5.|| or :$x || $c :true if either $x or $c is true
     //6.! : !x :true if $x is not true
echo "<br>";
$x = 100;
$y = 50;
if ($x == 100 and $y == 50){
    ECHO "conditions are true";
}
echo "<br>";
if ($x == 99 or $y == 50){
    ECHO "one condition is not true";
}
echo "<br>";
if ($x || 99 or $y == 50){
    ECHO "one condition is not true";
}
echo "<br>";
if (!$x ==99){
    ECHO "$x is not equal to 99";
}



//5.String operators
//Concatenation
$name = "php";
$name_two = "Developer";
echo $name.$name_two;
echo "<br>";
//concatenation assignment
$firstname = "Jabali";
$secondname = "Asher";
echo $firstname.=$secondname; #firstname =$firstname.secondname


















?>