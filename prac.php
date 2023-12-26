<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    echo "
<!DOCTYPE html>
<html lang='en'>
<head>
<head>
  <meta charset='UTF-8' />
  <meta http-equiv='X-UA-Compatible' content='IE=edge' />
  <meta name='viewport' content='width=device-width, initial-scale=1.0' />
  <title>Buy</title>

    <!-- custom css file link  -->
    <!-- <link rel='stylesheet' href='paying2.css'> -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

*{
  font-family: 'Poppins', sans-serif;
  margin:0; 
  padding:0;
  box-sizing: border-box;
  outline: none; 
  border:none;
  text-transform: capitalize;
  transition: all .2s linear;
}

.container{
  display: flex;
  justify-content: center;
  align-items: center;
  padding:25px;
  min-height: 100vh;
  display : flex;
  flex-direction : row;
  /* background: linear-gradient(90deg, #2ecc71 60%, #27ae60 40.1%); */
}

.details{
  background-color: #ffffff;
    width: 350px;
    height: 705px;
    margin: -1% 0px 0px -250px;
    margin-left: 0px;
    margin-right: 30px;
}




.frame{
  background-color: #ffffff;
  margin: 25px;
  height: 320px;
}


.container form{
  padding:20px;
  width:700px;
  background: #fff;
  box-shadow: 0 5px 10px rgba(0,0,0,.1);
}

.container form .row{
  display: flex;
  flex-wrap: wrap;
  gap:15px;
}

.container form .row .col{
  flex:1 1 250px;
}

.container form .row .col .title{
  font-size: 20px;
  color:#333;
  padding-bottom: 5px;
  text-transform: uppercase;
}

.container form .row .col .inputBox{
  margin:15px 0;
}

.container form .row .col .inputBox span{
  margin-bottom: 10px;
  display: block;
}

.container form .row .col .inputBox input{
  width: 100%;
  border:1px solid #ccc;
  padding:10px 15px;
  font-size: 15px;
  text-transform: none;
}

.container form .row .col .inputBox input:focus{
  border:1px solid #000;
}

.container form .row .col .flex{
  display: flex;
  gap:15px;
}

.container form .row .col .flex .inputBox{
  margin-top: 5px;
}

.container form .row .col .inputBox img{
  height: 34px;
  margin-top: 5px;
  filter: drop-shadow(0 0 1px #000);
}

.container form .submit-btn{
  width: 100%;
  padding:12px;
  font-size: 17px;
  background: #fa0000;
  color:#ffffff;
  margin-top: 5px;
  cursor: pointer;
}

.container form .submit-btn:hover{
  background: #c8c7fb;
  color:#000000;
}

h5{
    text-align: center;

}

h4{
    text-align: center;
}

.btn{
    color:  rgb(66, 66, 255);;
}



    </style>

</head>
<body>
";
$con = mysqli_connect('localhost','root','','user_db');
mysqli_select_db($con,'user_db');
if(isset($_POST['send'])){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $location = $_POST['location'];
   $guests = $_POST['guests'];
   $arrivals = $_POST['arrivals'];
   $leaving = $_POST['leaving'];

 

   $insert = 
   " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values 
    ('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";

   mysqli_query($con, $insert);

   
}else{
   echo 'something went wrong please try again!';
}
echo"
<div class='container'>
    <div class='details'>
        <div class='frame text-center col-lg-3 col-md-4 col-12'>
            <h3>Your Choice</h3>
";    
           if(isset($_POST['Goa']))
           {
            $name="Goa Package";
            $price="₹8,999";
            echo "
            <img src='images/goa.jpg' alt=''>
            <h3>Goa Package</h3>
            <p>Welcome to Goa, India's smallest state and one of its most popular tourist destinations! With its beautiful beaches, vibrant culture, and historical landmarks, Goa offers something for every type of traveler.It is a popular tourist destination that attracts visitors.</p>
            <div class='price'>₹8,999</div>
            ";
           }
           elseif(isset($_POST['Pune']))
           {
            $name="Pune Package";
            $price="₹7,999";
        
            echo "
            <img src='images/pune.jpg' alt=''>
            <h3>Pune Package</h3>
            <p>Pune is a city located in the western Indian state of Maharashtra, renowned for its rich history, cultural heritage, and pleasant climate. It is a city that blends modernity with tradition, and is known as the 'Oxford of the East' due to its numerous educational institutions.</p>
            <div class='price'>₹7,999</div>
            ";
           }
           elseif(isset($_POST['a3']))
           {
            $name="Smart Watch";
            $price="₹4500";
        
             echo "
                  <img class='img-fluid mb-3 ' src='images/featured/3.jpg'>
                  <h5 class='p-name'>Smart Watch </h5>
                  <h4 class='p-price'>₹4500</h4>
            ";
           }
           elseif(isset($_POST['a4']))
           {
            $name="Curren";
            $price="₹1500";
        
            echo "
                  <img class='img-fluid mb-3 ' src='images/featured/4.jpg'>
                  <h5 class='p-name'>Curren </h5>
                  <h4 class='p-price'>₹1500</h4>
            ";
        
           }
        
            // b
        
            elseif(isset($_POST['b1']))
            {
            $name="Perfomance Gear ";
            $price="₹4899";
        
            echo "
            <img class='img-fluid mb-3' src='images/wwatch/1.jpg'>
                  <h5 class='p-name'>Perfomance Gear </h5>
                  <h4 class='p-price'>₹4899</h4>
            ";
        
            }
            elseif(isset($_POST['b2']))
            {
            $name="Gentle Wear ";
            $price="₹3499";
        
            echo "
            <img class='img-fluid mb-3' src='images/wwatch/2.jpg'>
            <h5 class='p-name'>Gentle Wear </h5>
            <h4 class='p-price'>₹3499</h4>
        ";
        
            }
            elseif(isset($_POST['b3']))
            {
            $name="Aura";
            $price="₹2999";
        
            echo "
            <img class='img-fluid mb-3' src='images/wwatch/3.jpg'>
            <h5 class='p-name'>Aura</h5>
            <h4 class='p-price'>₹2999</h4>
        ";  
            }
            elseif(isset($_POST['b4']))
            {
            $name="Rolex";
            $price="₹45000";
        
            echo "
            <img class='img-fluid mb-3' src='images/wwatch/4.jpg'>
            <h5 class='p-name'>Rolex </h5>
            <h4 class='p-price'>₹45000</h4>
        ";
            }
        
            // c
        
  echo"
        </div>
    </div>

    <form action='' method='post'>
        
            <div class='col'>

                <h3 class='title'>payment</h3>

                <div class='inputBox'>
                    <span>cards accepted :</span>
                    <img src='images/card_img.png' alt=''>
                </div>
                <div class='inputBox'>
                    <span>name on card :</span>
                    <input type='text' placeholder='mr.M' name='cardna' required>
                </div>
                <div class='inputBox'>
                    <span>credit card number :</span>
                    <input type='number' placeholder='1111-2222-3333-4444' name='cardno' required>
                </div>
                <div class='inputBox'>
                    <span>exp month :</span>
                    <input type='text' placeholder='january' name='expmon' required>
                </div>

                <div class='flex'>
                    <div class='inputBox'>
                        <span>exp year :</span>
                        <input type='number' placeholder='2023' name='expyear' required>
                    </div>
                    <div class='inputBox'>
                        <span>CVV :</span>
                        <input type='text' placeholder='1234' name='cvvno' required>
                    </div>
                </div>

            </div>
    
        
        // <input type='hidden' value=' $name ' name='h1'>
        // <input type='hidden' value=' $price ' name='h2'>

        <input type='submit' value='proceed to checkout' class='submit-btn' name='send'>
        <input type='button' value='<-- Previous page ' onclick='history.back()' class='btn'> 
        <!-- <button onclick='history.back()'>Go Back</button> -->

    </form>
</div>    



</body>
</html>
";
} else {
    echo '<script language = "javascript">';
    echo 'alert("Fail login")';
    echo '</script>';
    echo "<script>window.location.assign('login.php')</script>";
    die();
}

?>
