<?php
require_once('admin/connect.php');
$nameuser= $username = $email = $password = "";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  
    if(empty($_POST['username']))
  {
    echo $nameuser="Name is required";
  }
   else
   {
     $username= $_POST["username"];
   }
  if
    (empty($_POST['email']))
  {
    echo $nameuser="email is required";
  }
   else
   {
     $email= $_POST["email"];
   }
  if(empty($_POST["password"]))
  {
    echo $nameuser="password is required";
  }
  else
  {
    echo $password="password is required";
  }
  if(!$nameuser)
  {
    $sql= "INSERT INTO 'user_info'('user_id','username','email','password') 
    VALUES (NULL,'$username','$email','$password', ');";
    if($connect->query($sql) == TRUE)
      {
    echo "Inserted successfully";
  }
  else
  {
    echo "something is wrong";
  }
    
  }
  else
    {
    echo "Access denied";
  }
    
  
}
?>