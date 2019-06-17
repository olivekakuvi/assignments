<?php

#Global variables
//$GLOBALS
//$_SERVER
//$_REQUEST
//$_POST

//$_COOKIE
//$_SESSION




$x = 80;
$y = 100;

function addition(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    $c = "Local variable";
}
addition();
echo $z;
//echo $c;

echo "<br>";


#$_SERVER
// 1.PHP_SELF : returns the filename of the currently
echo // executing script
$_SERVER['PHP_SELF'];

#$_REQUEST
//is used to collect data after submitting an HTML form.
if ($_SERVER["REQUEST_METHOD"]== "POST"){
  $name = $_REQUEST['name'];
  $country = $_REQUEST['country'];

  if (empty($name)&& empty($country)){
      echo "Name and country fields are empty";
  }else{
      echo $name."<br>";
      echo $country."<br>";
  }

}



?>