<?php 
require_once('admin/connect.php'); 
// checking the user
if(isset($_POST['login']))
{
  $email = mysqli_real_escape_string($conn,$_POST['email']); 
  $password = md5(mysqli_real_escape_string($conn,$_POST['password']));
  $sel_user = "select * from user_info where email='$email' AND password='$password';"; $run_user_info = mysqli_query($conn, $sel_user_info); $check_user_info = mysqli_num_rows($run_user); 
  if($check_user_info>0)
  {
    session_start();
    //set session variable
    $_SESSION['user_email']=$email; 
    echo "<script>window.open('index.php','_self'
    )
    </script>";
  }
  else
  {
    echo "<script>alert('Email OR password is not correct, Try again!'
    )
    </script>";
  }
}
?>
