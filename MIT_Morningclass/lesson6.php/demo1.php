<?php


//PHP arrays
//array()
//$variableName = array('benz', 'toyota')

$cars = array('benz','toyota','audi','ford');
//$cars[0]== 'benz'
//$cars[1]== 'toyota'

echo $cars[0];
echo "<br>";
echo $cars[2];
echo "<br>";
echo $cars[4];
echo "<br>";

echo "I like".$cars[0]."," .$cars[1]. ",".$cars[2]. " and ". $cars[3];
echo "<br>";

$num_cars = count($cars);
//echo $num_cars;
echo count($cars);
echo "<br>";
echo "<br>";
//for (init count; test count;increment count){}
for ($x = 0; $x < $num_cars; $x++){
    echo $x.".".$cars[$x]. "<br>";
}
echo "<br>";

#PHP Associative Arrays
#Associative arrays are arrays that used named keys thatyou assign them.

$food = array("Uganda"=>"Matoke","Kenya"=>"Sembe","Tanzania"=>"Wali");
echo $food["Uganda"];
echo "<br>";
echo "I love".$food["Uganda"]."," .$food["Kenya"]. " and " .$food["Tanzania"];
echo "<br>";

foreach ($food as $country=>$dish){
    echo $country." : ". $dish."<br>";
}
echo "<br>";
echo "<br>";

$electonics = array(); #empty array
 $electonics['phone'] = 'huawei';
 $electonics['laptop'] = 'macbook';
 $electonics['TV'] = 'samsang';

foreach ($electonics as $device=>$brand){
    echo $device." : ". $brand."<br>";
}
//assignment:create two functions,one that takes in an array as an index array and
// the second one takes in an associative array as an argument
// and echos  out each item.
function funindex($theArray){
    for ($x = 0;$x < count($theArray); $x++){
        echo $x. $theArray[$x]. "<br>";
    }
}


?>