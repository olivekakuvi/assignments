<?php

//Validating email and web URL and names

$name = $_POST['myname'];
$email = $_POST['email'];
$url = $_POST['url'];
$imgUrl = $_POST['imgUrl'];

if (empty($name)){
    $nameError = "Field empty";
    echo $nameError;
}else{
    if (!preg_match("/^[a-zA-Z]$/", $name)){
        $nameError = "only letters and white space allowed";
        echo $nameError;
    }else{
        echo "your name is $name";
    }
}
if (empty($email)){
    $emailError = "Email cannot be empty";
}else{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailError = "Invalid email format";
    }else{
        echo "Email is valid";
    }
}

if (empty($url)){
    $urlError = "url cannot be empty";
}else{
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$url)) {
        $urlError = "Invalid URL";
        echo $urlError;
    }else{
        echo "Url is valid";
    }
}

if (empty($imgUrl)){
    $imgUrlError = "url cannot be  empty";
}else{
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$imgUrl)) {
        $imgUrlError = "Invalid URL";
        echo $imgUrlError;
    }else{
        echo "Image Url is valid";
    }
}




?>


<html>
   <head>
       <title>Php name ,Email and URL validation</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   </head>
   <body>
   <div style="justify-content: center">
        <img src="<?php echo $_POST['imgUrl']?>">
   </div>

       <form action="" method="POST">
           <div class="form-group">
               <label for="name">name</label>
               <input type="text" name="myname" class="form-control">
           </div>
           <div class="form-group">
               <label for="email">Email</label>
               <input type="email" name="email" class="form-control">
           </div>
           <div class="form-group">
               <label for="URL">web URL</label>
               <input type="text" name="url" class="form-control">
           </div>
           <div class="form-group">
               <label for="imgUrl">Image url</label>
               <input type="text" name="imgUrl" class="form-control">
           </div>
           <div class="form-group">
               <button type="submit">Submit</button>

           </div>
       </form>

   </div>

   </body>

</html>
