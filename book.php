<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
    echo "

<!DOCTYPE html>
<html lang='en'>
<head>
   
   <meta charset='UTF-8'>
   <meta http-equiv='X-UA-Compatible' content='IE=edge'>
   <meta name='viewport' content='width=device-width, initial-scale=1.0'>
   <title>book</title>

   <!-- swiper css link  -->
   <link rel='stylesheet' href='https://unpkg.com/swiper@7/swiper-bundle.min.css' />

   <!-- font awesome cdn link  -->
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>

   <!-- custom css file link  -->
   <link rel='stylesheet' href='style1.css'>

</head>
<body>
   
<!-- header section starts  -->

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
          
        </div>
    </header>

<!-- header section ends -->

<div class='book_heading' style='background:url(images/header-bg-3.png) no-repeat'>
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class='contact'>

<div class='wrapper1'>
        <div class='title1'>
          <h1>book your trip!</h1>
        </div>
  <div class='contact-form'>
   <form action='book_form.php' method='post'>

      <div class='flex'>
        
         <div class='input-fields'>
            <span>name :</span>
            <input type='text' placeholder='enter your name' name='name' class='input'>
         </div>
         <div class='input-fields'>
            <span>email :</span>
            <input type='email' placeholder='enter your email' name='email' class='input'>
         </div>
         <div class='input-fields'>
            <span>phone :</span>
            <input type='number' placeholder='enter your number' name='phone' class='input'>
         </div>
         <div class='input-fields'>
            <span>address :</span>
            <input type='text' placeholder='enter your address' name='address' class='input'>
         </div>
         <div class='input-fields'>
            <span>where to :</span>
            <input type='text' placeholder='place you want to visit' name='location' class='input'>
         </div>
         <div class='input-fields'>
            <span>how many :</span>
            <input type='number' placeholder='number of guests' name='guests' class='input'>
         </div>
         <div class='input-fields'>
            <span>arrivals :</span>
            <input type='date' name='arrivals' class='input'>
         </div>
         <div class='input-fields'>
            <span>leaving :</span>
            <input type='date' name='leaving' class='input'>
         </div>
         <input type='submit' value='submit' class='btn' name='send'>
         
      </div>

      

   </form>
</div>
</div>
</section>


<!-- booking section ends -->








<!-- footer section starts  -->

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









<!-- swiper js link  -->
</script src='https://unpkg.com/swiper@7/swiper-bundle.min.js'></>

<!-- custom js file link  -->
<script src='js/exscr.js'></script>

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