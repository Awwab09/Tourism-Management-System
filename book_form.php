<?php
   echo"
   <!DOCTYPE html>
   <html>
   <head>
      <meta charset='UTF-8'>
      <meta http-equiv='X-UA-Compatible' content='IE=edge'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

      *{
        font-family: 'Poppins', sans-serif;
        margin:0; 
        padding:5px;
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
        width: 50%;
        padding: 12px;
        font-size: 17px;
        background: #28b428;
        color:#ffffff;
        margin-top: 5px;
        margin-left: 25%;
        cursor: pointer;
      }
      
      .container form .submit-btn:hover{
        background: black;
        color: white;
        
      }
      .title1 h1 {
        color: linear-gradient(to right, #2545fc, #0de3eb, #100a2e, #eedd44);
        <!--color: green;-->
        text-align: center;
        margin-bottom: 25px;
        font-size: 3.5rem;
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

      <title>Document</title>
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
   <form action='payment.php' method='post'>
        
   <div class='col'>

       <h1 class='title1'>payment</h1>

       <div class='inputBox'>
           <span>cards accepted :</span>
           <img src='images/card_img.png' alt=''>
       </div>
       <div class='inputBox'>
           <span>name on card :</span>
           <input type='text' placeholder='Card Name' name='cardna' required>
       </div>
       <div class='inputBox'>
           <span>credit card number :</span>
           <input type='number' placeholder='3333-2222-3333-1111' name='cardno' required>
       </div>
       <div class='inputBox'>
           <span>exp month :</span>
           <input type='text' placeholder='january' name='expmon' required>
       </div>

       <div class='flex'>
           <div class='inputBox'>
               <span>exp year :</span>
               <input type='number' placeholder='2025' name='expyear' required>
           </div>
           <div class='inputBox'>
               <span>CVV :</span>
               <input type='text' placeholder='321' name='cvvno' required>
           </div>
       </div>

   </div>




<input type='submit' value='proceed to checkout' class='submit-btn' name='send'>
<div>
<input type='button' value='<-- Previous page ' onclick='history.back()' class='btn'> 
<!-- <button onclick='history.back()'>Go Back</button> -->
</div>


</form>
</div>
    ";
?>

