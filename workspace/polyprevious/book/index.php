<!DOCTYPE html>

<html>
<head>
<title>Home</title>
<link type="text/css" rel="stylesheet" href="style.css">
<style type="text/css">
</style>
</head>

<body>

<div id="container">
<div id="header">
<h1 style="float:left">it is header part</h1>
<?php
session_start(); 
if(isset($_SESSION['user_email'])) {
  echo 'You are logged in';
?>
  
  <a href="logout.php">you are logged out</a>
  <?php

}
else { ?>
<div style="float:right"><ul><li><a href="login.php">Sign in</a></li><li><a href="register.php">Sign up</a></li>       <li> <a href="indexa.php">Order Here</a></li> </ul><div>
   
<?php
} ?>
  

</div>

<div id="body">
   <div style="float:left"> 
     <ul>
     <li><a href="bangla/index.php"> Bangla </a></li> 
     <li><a href="english/index.php"> English </a></li>
      <li><a href="mathematics/index.php"> Mathematics </a></li>
     </ul>
  </div>
  
    <?php

require_once("container.php");
require_once("footer.php");

?>
 




</div>

