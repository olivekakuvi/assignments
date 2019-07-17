<?php
#create a database connection
$conn = mysqli_connect('localhost','root','','REGISTRATION');


# check connection is working
if(!$conn){
    #First handle a situation where an error can occur due to unsuccessfull connection
    #mysqli_connect_error(): is a function that stores/contains the error msg for unsuccessfull
    #connection
    die("Connection failed".mysqli_connect_error());
}
?>