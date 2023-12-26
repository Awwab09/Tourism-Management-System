<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    session_unset();
    session_destroy();
    echo '<script language = "javascript">';
    echo '</script>';
    echo "<script>window.location.assign('login.php')</script>";
    die();
} else {
    echo '<script language = "javascript">';
    echo 'alert("Fail login")';
    echo '</script>';
    echo "<script>window.location.assign('login.php')</script>";
    die();
}

?>