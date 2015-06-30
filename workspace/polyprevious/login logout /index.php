
<?php
session_start();

if(isset($_SESSION['user_email'])){
  echo 'You are logged in';
?>

<br />
 <a href='logout.php'>Logout</a>
<?php
}

else{ ?>
<ul> 
  <li> <a href='login.php'>Sign in </a></li>
 <li> <a href='register.php'> Sign up </a></li>
  </ul>
<?php
}
 
?>

