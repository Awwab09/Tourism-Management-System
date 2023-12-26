<html>
	<head>
		<title>
			registrationpage...
		</title>
       <!-- <link rel="stylesheet" href="reges.css"> -->
       <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");
*
{
  margin: 0;
  padding: 0;
}
html
{
  scroll-behavior: smooth;
}
.background1
{
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: -1;
  
}
.container
{
  position: absolute;
  width: 100%;
}
fieldset
{
  padding: 15px;

}
.mainbox
{
  background: #ffffffa8;
  width: 30%;
  margin: 100px auto;
  padding: 10px;
}
  
a
{
  float: right;
  text-decoration: none;
  font-size: 20px;
  color: orange;
  margin: -12px 0px 0px -100px;
}

a:hover
{
  color: red;
}

 a.admin
{
  float: left;
    text-decoration: none;
    font-size: 25px;
    color: orange;
    margin: 15px 0px 0px 20px;
    font-family: Viner Hand ITC;
} 


h1
{
font-family: "Poppins", sans-serif;
  font-size: 35px;
  margin: 5px 93px 5px 70px;
  width: 130px;
  text-align: -webkit-center;
}
.form
{
  width: 95%;
  margin: auto;
}
label
{
  font-family: serif;
  font-size: 17px;
}
span
{
  color: red;
}
input
{
  width: 100%;
  height: 30px;
  border: none;
  border-radius: 5px;
  padding: 5px;
}
/* .background{
  background-color: #eedd82;
} */
.button
{
  background: #5d99ea;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-size: 18px;
  font-family: revert;
  height: 45px;
}
.button:hover
{
  border: 1px  solid black;
}
.icon{
  width: 50px;
  height: 50px;
}

		</style>
	</head>
	<body>
		<img class="background1" src="images/camping.jpg">
		<div class="container">
		<a href="adminlogin.php" class="admin" ><img src="images/security.png" alt="" class="icon"></a> 
			
			<div class="mainbox">
				
				<a href="login.php">Login</a>
				<h1>Registration</h1>
				<div class="form">
					<form action="register.php" method="post">
						<label>Username<span>*</span></label>
						<br>
						<input type="text" name="username">
						<br><br>
						<label>Email<span>*</span></label>
						<br>
						<input type="email" name="email">
						<br><br>
						<label>Password<span>*</span></label>
						<br>
						<input type="password" name="password">
						<br><br>
						<label>Confirm Password<span>*</span></label>
						<br>
						<input type="password" name="cpassword">
						<br><br><br>
						<input type="submit" name="Login" value="Sign up" class="button">
					</form>
				</div>
				
			</div>
		</div>	
	</body>
</html>