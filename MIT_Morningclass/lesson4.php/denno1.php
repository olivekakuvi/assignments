<?php


#PHP condition statements
// 1.if statement:Executes some code if ONE condition is true
// 2.if...else
// 3.if ...elseif...else
// 4.switch

/*
if (condition){
   code to execute
}
*/
$gender = "male";
if ($gender == "female"){
    echo "happy women's day";
}
echo "<br>";
if ($gender == "female"){
    echo "happy women's day";
}else{
    echo "happy men's day";
}

echo "<br>";
if ($gender == "not a human being"){
    echo "happy women's day";
}elseif($gender=="other"){
    echo "happy others day";
}else{
    echo "you are not a human being , maybe a BIGFOOT";
}



echo "<br>";
$t = date("H");
echo $t;
echo "<br>";
if ($t <= "12");{
    echo "good afternoon";
}

echo "<br>";

if ($t <= "17");{
    echo "good evening";}
echo "<br>";

if ($t == "09");{
    echo "have a good day";}





//write a php program which iterates the integers from 1 to 100
//for multiples of three prin "Fizz" instead of the number
//and for the multiples of five print "Buzz"
//for numbers which are multiples of both three and five print "FizzBuzz"



#The switch statement is used to perform actions based on different conditions
#Blocks of code to be executed







//syntax
/*

switch (n){
    case label1:
     code to execute;
      break;

    case label1:
     code to execute;
      break;

    case label1:
     code to execute;
      break;

    default:
        code to execute if n is different from labels;


}

*/
echo "<br>";
switch ('Female'){
    case 'Male':
        echo 'I am a male';
        break;

    case 'Female':
        echo 'I am a female';
        break;


    case 'other':
        echo 'I am a other';
        break;

    Default:
        echo "None of the above";


        }











?>