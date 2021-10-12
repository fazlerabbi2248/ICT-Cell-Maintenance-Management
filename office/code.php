<?php
include('security.php');

if(isset($_POST['login_btn']))
{
    $email_login = $_POST['emaill']; 
    $password_login = $_POST['password']; 
    $password_login=md5($password_login);

    $query = "SELECT * FROM officer WHERE officer_email='$email_login' AND password='$password_login' LIMIT 1";
    $query_run = mysqli_query($conn, $query);

   if(mysqli_fetch_array($query_run))
   {
      
        $_SESSION['username'] = $email_login;
      
        header('Location: index.php');
   } 
   else
   {
        $_SESSION['status'] = "Email / Password is Invalid";
        header('Location: login.php');
   }
    
}
?>