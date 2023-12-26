<?php
    header('location:index.php');

    $con = mysqli_connect('localhost','root','','user_db');
    mysqli_select_db($con,'user_db');
    if(isset($_POST['send'])){
       $name = $_POST['name'];
       $email = $_POST['email'];
       $phone = $_POST['phone'];
       $subject = $_POST['subject'];
       $message = $_POST['message'];

     
 
       $insert = 
       " insert into contact(name, email, phone,subject, message) values 
        ('$name','$email','$phone','$subject','$message') ";
 
       mysqli_query($con, $insert);
    
       
    }else{
       echo 'something went wrong please try again!';
    }
 
?>