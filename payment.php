<?php
$con = mysqli_connect('localhost','root','','user_db');
   mysqli_select_db($con,'user_db');
   if(isset($_POST['send'])){
      $cardna = $_POST['cardna'];
      $cardno = $_POST['cardno'];
      $expmon = $_POST['expmon'];
      $expyear = $_POST['expyear'];
      $cvvno = $_POST['cvvno'];

    

      $insert = 
      " insert into payment_form(cardna, cardno, expmon, expyear, cvvno) values 
       ('$cardna','$cardno','$expmon','$expyear','$cvvno') ";

      mysqli_query($con, $insert);
   
      
   }else{
      echo 'something went wrong please try again!';
   }
   ?>
   <!DOCTYPE html>
<html>
<head>
    <title>TourUp</title>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css'>
    <link rel='icon' href='images/favicon.png' type='image/x-icon'>
    <link rel='stylesheet' href='style.css'>
    <style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

.container1{
    width: 100%;
    height: 100vh;
    background: white;
    display: flex;
    align-items: center;
    justify-content: center;
}



.popup{
    width: 400px;
    
    background: rgb(232, 235, 246);
    border-radius: 6px;
    position: absolute;
    top: 58%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
    padding: 0 30px 30px;
    color: #333;
    /* visibility: hidden; */
    transition: transform 0.4s, top 0.4s;
}

.open-popup{
    visibility: visible;
    top: 50%;
    transform: translate(-50%,-50%) scale(1);
}

.popup img{
    width: 100px;
    margin-top: -50px;
    border-radius: 50px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);

}

.popup h2{
    font-size: 50px;
    font-weight: 500;
    margin: 30px 0 10px;
}

.popup button{
    width: 100%;
    margin-top: 50px;
    padding:10px 0;
    background: #6fd649;
    color: #fff;
    border: 0;
    outline: none;
    font-size: 18px;
    border-radius: 4px;
    cursor: pointer;
    box-shadow: 0 5px 5px rgba(0,0,0,0.2);
}
p{
    font-size: 15px;
}
  </style>
    <!-- <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css'
    integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'> -->
</head>
<body>
    <header class='header active'>
        <a href='#' class='logo'><i class='fas fa-bed'></i>TourUp</a>
        <nav class='navbar'>
            <div id='nav-close' class='fas fa-times'></div>
            <a href='#home'>home</a>
            <a href='#category'>Adventure</a>
            <a href='#packages'>packages</a>
            <a href='#contact'>contact</a>
        </nav>
        <div class='icons'>
            <div id='menu-btn' class='fas fa-bars'></div> 
            <div id='search-btn' class='fas fa-search'></div>
            <a href='login.php' class='fa fa-user'></a>
            <a href='logout.php' class='fa fa-sign-out'></a>
        </div>
    </header>
    <div class="container1">
    <form>
        <div class="popup" id="popup">
            <img src="images/tick.png" alt="">
            <h2>Thank You!</h2>
            <p>Your details has been successfully submitted .Thanks!</p>
            <button type="submit" formaction="index.php" >OK</button>
            <!-- <input type='button' value='<-- Previous page ' onclick='history.back()' class='btn'>  -->
        </div>
      </form>
    </div>
    <section class='footer'>

<div class='box-container'>

    <div class='box'>
        <h3>Quick links</h3>
        <a href='#home'>home</a>    
        <a href='#packages'>packages</a>
        <a href='#query'>query</a>
    </div>

    <div class='box'>
        <h3>extra links</h3>
        <a href='#contact'>ask questions</a>
        <a href='#'>terms of use</a>
        <a href='#'>privacy policy</a>
    </div>

    <div class='box'>
        <h3>contact info</h3>
        <a href='tel:+919834887447'> <i class='fas fa-phone'></i> +91 9834887447 </a>
        <a href='mailto: awwabsaleem09@gemil.com'> <i class='fas fa-envelope'></i> awwabsaleem09@gemil.com </a>
        <a href='#'> <i class='fas fa-map'></i> Pune, INDIA - 411001 </a>
    </div>

    <div class='box'>
        <h3>follow us</h3>
        <a href='https://www.instagram.com/_awwab_'> <i class='fab fa-instagram'></i> instagram </a>
        <a href='https://www.linkedin.com/in/awwab-dingankar-315a06209/'> <i class='fab fa-linkedin'></i> linkedin </a>
        <a href='https://github.com/Awwab09'> <i class='fab fa-github'></i> github </a>
    </div>
</div>
<div class='credit'>created by <span>Awwab Dingankar</span> | all rights reserved!</div>
</section>
<!-- footer section ends -->
<script src='js/exscr.js'></script>
</body>
</html>