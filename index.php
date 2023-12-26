<?php
    echo"
<!DOCTYPE html>
<html>
<head>
    <title>TourUp</title>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css'>
    <link rel='icon' href='images/favicon.png' type='image/x-icon'>
    <link rel='stylesheet' href='style_1.css'>
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
            <div id='search-btn' class='fas fa-search'></div>
            <a href='login.php' class='fa fa-user'></a>
            <a href='logout.php' class='fa fa-sign-out'></a>
            <div id='menu-btn' class='fas fa-bars'></div>

        </div>
    </header>

    <div class='search-form'>
        <div id='close-search' class='fas fa-times'></div>
        <form action=''>
        <input type='search' name='' placeholder='search here...' id='search-box'>
        <label for='search-box' class='fas fa-search'></label>
        </form>
    </div>

    <section class='home' id='home'>
   
        <div class='wrapper'>
           
                <div class='box' style='background: url(images/bgimg.jpg) no-repeat;'>
                <div class='content'>
                    <span><b>never stop</b></span>
                    <h3>exploring</h3>
                    <p>TourUp offers best deals on India tour packages.</p>
                    <a href='#category' class='btn'>get started</a>
                </div>
                </div>  
        </div>
    </section>

    <section class='category' id='category'>

        <h1 class='heading'>Adventure Idea!</h1>
    
        <div class='box-container'>
    
            <div class='box'>
                <img src='images/camping.jpg' alt=''>
                <h3>Camping</h3>
                <p>Camping is a popular outdoor activity that offers a unique and immersive way to experience the beauty of nature.</p>
                <a href='https://en.wikipedia.org/wiki/Camping' class='btn' target='_blank'>read more</a>
            </div>
    
            <div class='box'>
                <img src='images/zipline.jpg' alt=''>
                <h3>Zip lines</h3>
                <p>Zipline is a thrilling and exciting activity that involves flying through the air along a suspended cable or rope.</p>
                <a href='https://en.wikipedia.org/wiki/Zip_line' class='btn' target='_blank'>read more</a>
            </div>
    
            <div class='box'>
                <img src='images/swimming.jpg' alt=''>
                <h3>Swimming</h3>
                <p>Swimming is a popular recreational activity and a great way to enjoy the water while on vacation.</p>
                <a href='https://en.wikipedia.org/wiki/Swimming' class='btn' target='_blank'>read more</a>
            </div>
    
        </div>
    
    </section>
    <section class='packages' id='packages'>

        <h1 class='heading'>popular packages</h1>
    
        <div class='box-container'>
    
            <div class='box'>
                <div class='image'>
                    <img src='images/goa.jpg' alt=''>
                </div>
                <div class='content'>
                    <h3>Goa Package</h3>
                    <p>Welcome to Goa, India's smallest state and one of its most popular tourist destinations! With its beautiful beaches, vibrant culture, and historical landmarks, Goa offers something for every type of traveler.It is a popular tourist destination that attracts visitors.</p>
                    <div class='price'>₹8,999</div>
                    <a href='book.php' class='btn' name='Goa'>book now</a>
                </div>
            </div>
    
            <div class='box'>
                <div class='image'>
                    <img src='images/pune.jpg' alt=''>
                </div>
                <div class='content'>
                    <h3>Pune Package</h3>
                    <p>Pune is a city located in the western Indian state of Maharashtra, renowned for its rich history, cultural heritage, and pleasant climate. It is a city that blends modernity with tradition, and is known as the 'Oxford of the East' due to its numerous educational institutions.</p>
                    <div class='price'>₹7,999</div>
                    <a href='book.php' class='btn' name='Pune'>book now</a>
                </div>
            </div>
    
            <div class='box'>
                <div class='image'>
                    <img src='images/alibag.jpg' alt=''>
                </div>
                <div class='content'>
                    <h3>Alibag Package</h3>
                    <p>Alibag, also known as Alibaug, is a coastal town located in the Konkan region of Maharashtra, India. It is a popular weekend getaway destination for tourists from Mumbai and Pune due to its picturesque beaches, historical forts, and tranquil surroundings.</p>
                    <div class='price'>₹2,999</div>
                    <a href='#contact' class='btn' name='Alibaug'>book now</a>
                </div>
            </div>
    
            <div class='box'>
                <div class='image'>
                    <img src='images/the-murud-janjira-fort.jpg' alt=''>
                </div>
                <div class='content'>
                    <h3>Murud Package</h3>
                    <p>Murud is a quaint coastal town located in the Raigad district of Maharashtra, India. It is a popular tourist destination known for its serene beaches, historic forts, and ancient temples. Murud attracts a large number of tourists throughout the year, especially during the winter. </p>
                    <div class='price'>₹11,999</div>
                    <a href='book.php' class='btn' name='Murud'>book now</a>
                </div>
            </div>
    
            <div class='box'>
                <div class='image'>
                    <img src='images/shrivardhan.jpg' alt=''>
                </div>
                <div class='content'>
                    <h3>Shrivardhan Package</h3>
                    <p>Shrivardhan is a quaint coastal town located in the Raigad district of Maharashtra, India. The town is known for its serene and picturesque beaches, historic temples, and ancient forts. With its rich cultural heritage, Shrivardhan is a popular tourist destination.</p>
                    <div class='price'>₹4,999</div>
                    <a href='book.php' class='btn' name='Shrivardhan'>book now</a>
                </div>
            </div>
    
            <div class='box'>
                <div class='image'>
                    <img src='images/mumbai.jpg' alt=''>
                </div>
                <div class='content'>
                    <h3>Mumbai Package</h3>
                    <p>Mumbai, also known as Bombay, is a vibrant and bustling city located on the western coast of India. It is the financial capital of the country and is home to over 20 million people, making it one of the most populous cities in the world.With its rich history, diverse culture.</p>
                    <div class='price'>₹20,000</div>
                    <a href='book.php' class='btn' name='Mumbai'>book now</a>
                </div>
            </div>
    
        </div>
    
    </section>
    <section class='contact' id='contact'>
    
    <div class='wrapper1'>
        <div class='title1'>
          <h1>contact us form</h1>
        </div>
        <div class='contact-form'>
            <form method = 'post' action = 'contact_us.php'>
          <div class='input-fields'>
            
            <input type='text' class='input' placeholder='Name' name='name'>
            <input type='email' class='input' placeholder='Email Address' name='email' pattern='.+@gmail\.com'>
            <input type='phone' class='input' placeholder='Phone' name='phone'>
            <input type='text' class='input' placeholder='Subject' name='subject'>
          </div>
          <div class='msg'>
            <textarea placeholder='Message' name='message'></textarea>
            <input type='submit' value='submit' class='btn' name='send'>
            </form>
          </div>
        </div>
        </div> 
    
    </section>
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
";
?>