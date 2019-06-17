<?php

#constants are like variables except that once they cannot be changed
#constants name starts with a letter or underscore
#no $ before the constant name
#constants are global
#To define a constant use define()
   #syntax
     //define(name, value, case-insensitive)

define("coordinates", 90, false);
echo  coordinates;
ECHO "<br>";
define("height", 5.7, true);
echo height;
ECHO "<br>";
echo HEIGHT;
ECHO "<br>";



#Constant Arrays
//fruits = array(["banana", "mango", "apple"]);
define("fruits",["banana","mango","apple"]);
echo fruits[0];
ECHO "<br>";
echo fruits[1];
ECHO "<br>";
echo fruits[2];




?>