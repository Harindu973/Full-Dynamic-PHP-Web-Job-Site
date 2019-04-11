<?php
include('login.php'); 
if(isset($_SESSION['login_user'])){
header("location: screen.php");
}
?> 
<!DOCTYPE html>
<html>
<head>
  <title>JOB SEEKER ADMIN </title>
  <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
 <div id="login">
  <h2>Login Form</h2>
  <form action="" method="post">
   <label>UserName :</label>
   <input id="name" name="username" placeholder="username" type="text">
   <label>Password :</label>
   <input id="password" name="password" type="password"><br><br>
   <input name="submit" type="submit" value=" Login ">
   <span><?php echo $error; ?></span>
  </form>
 </div>
</body>
</html>