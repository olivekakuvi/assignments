<?php

//PHP sorting arrays

//The elements in an array can be sorted in alphabetical or
//numerical order, descending or ascending

$cars = array('Benz','VW' ,'Toyota', 'Audi','Ford');
$nums = array(12,16,18,25,27,80,100,567,673,892,85);
$food = array("Uganda"=>"Matoke","Kenya"=>"Sembe","Tanzania"=>"Wali");
#Sort (): sort array in ascending order
for ($x = 0 ; $x < count($cars); $x++){
 echo $x. $cars[$x]. "<br>";
}
sort($cars);#sorting array in ascending order

for ($x = 0 ; $x < count($cars); $x++){
    echo $x. $cars[$x]. "<br>";
}
echo "<br>";

for ($x = 0 ; $x < count($nums); $x++){
    echo $x. $nums[$x]. "<br>";
}

echo "<br>";

//rsort() sort arrays in descending order
$cars = array('Benz','VW' ,'Toyota', 'Audi','Ford');
rsort($cars);
for ($x = 0 ; $x < count($cars); $x++){
    echo $x. $cars[$x]. "<br>";
}
echo "<br>";
//asort () sort associative array i ascending order, according to value

foreach ($food as $country => $dish){
    echo "$country : $dish <br>";
}
asort($food);
foreach ($food as $country => $dish){
    echo "$country : $dish <br>";
}

//ksort() sort associative arrays in ascending order according to the key


ksort($food);
foreach ($food as $country => $dish){
    echo "$country : $dish <br>";
}















?>