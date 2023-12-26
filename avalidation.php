<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password']))
{
    if ($_POST['username']=='admin' && $_POST['password']=='admin') 
    {
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        header('location:admin.php');
    } 
    else
    {
        header('location:adminlogin.php');
    }
}
?>