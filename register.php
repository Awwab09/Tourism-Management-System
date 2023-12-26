<?php
	header('location:login.php');
	
	$server="localhost";
  	$username="root";
  	$password="";
  	$dbname="user_db";

  	$con = mysqli_connect($server, $username, $password, $dbname);


	mysqli_select_db($con, 'user_db');

	$username=$_POST['username'];
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$cpass=$_POST['cpassword'];
	if($pass==$cpass)
	{
		$password=$_POST['password'];
	}
	else
	{
		echo "Password not matched";
	}
	

	$s="select * from user_form where username='$username'";
	$result= mysqli_query($con, $s);
	$num=mysqli_num_rows($result);

	if($num==1)
	{
		echo "Username already exist...";
	}
	else
	{
		$reg="insert into user_form(username, email, password) values('$username', '$email', '$password')";
		mysqli_query($con, $reg);
		echo "Registration Successful...";
	}
?>