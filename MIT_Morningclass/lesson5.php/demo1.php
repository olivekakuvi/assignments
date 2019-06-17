<?php

















#creating/declaring a function
function sayHelloWorld(){
    echo " <br>";
    echo " <br>";
    echo " <br>";
}
#
sayHelloWorld();#calling a function
$x = strrev("hello world");
//echo $x;

#use parameter when declaring a function
function greetings($name, $age){
    echo "My name is $name and my age is $age years old";
}
echo "<br>";
#use argument when calling a function
$myname = "Olive";
$myage = 17;
greetings ($myname,$myage);

#create a function that takes a number, and it echos out the square of the number

function getsquare($num){
    echo $num * $num;
}
echo "<br>";
echo "<br>";
getsquare(10);
echo "<br>";
echo "<br>";
#write a function to reverse a string

echo strrev("love sleep");


function getmod($num,$num2){
    $result = $num % $num2;
    return $result;
}

$getthemode = getmod(3,2);

echo "<br>";
echo "<br>";

function church($pastor= "Ng'ang'a"){
    echo "my pastor is Pst. $pastor";
}

church("Cathy");













?>