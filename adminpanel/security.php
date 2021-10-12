<?php
session_start();
include('conn.php');
if($conn)
{
    // echo "Database Connected";
}
else
{
    header("Location: conn.php");
}

if(!$_SESSION['username'])
{
    header('Location: login.php');
}
?>