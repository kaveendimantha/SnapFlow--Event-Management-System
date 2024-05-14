<?php

// Database configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'event_photography';

// Connect to MySQL
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function getAllFAQs()
{
    global $conn;
    $sql = "SELECT * FROM faq";
    $result = $conn->query($sql);
    if (!$result) {
        die("Error retrieving FAQs: " . $conn->error);
    }
    $faqs = [];
    while ($row = $result->fetch_assoc()) {
        $faqs[] = $row;
    }
    return $faqs;
}

// Get all FAQs
$faqs = getAllFAQs();

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>FAQs</title>
    <script src="https://kit.fontawesome.com/18e83e9d68.js" crossorigin="anonymous"></script>
    <style>
        body {
    font-family:  Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    color:#585151;
    font-size: large;
  }

  .clearfix{overflow:auto;}

  .logo{
    width: 500px;
    height: 300px;
    display: block;
    margin-left: auto;
    margin-right: auto;	  
  }
  
  .UP{
    margin:auto;
    width:auto;
  }
  .top-bar{
    width:auto;
    background:white;
  }
  .top-bar-link{
    float:left;
  }
  .top-bar-links ul{
    margin-top: 20px;
    list-style:none;
  }
  .top-bar-links ul li{
    
    padding:0 25px;
    display: inline-block;
    margin-left: 12px;
    border-right:1px solid darkgray;
  }
  .top-bar-links ul li:last-child{
    border:none;
    padding:0 2px;
  }
  .top-bar-links ul li a{
    color: gray;
    margin-left: 15px;
    font-size: large;
  
  }
  .top-bar-links ul li a:hover{
    background-color: whitesmoke;
  
  }
  .sit-search{
    padding-right:20px ;
    float:right;
    margin: 0px;
    background: white;
    border-radius: 0 10px;
  
  }
  .sit-search input{
    margin-top: 2px;
    border: 0px;
    color: gray;
  }
  .sit-search button{
    border-radius: 30px;
    padding:10px;
    border: none;
    margin-right: 10px;
    color: #62676f;
  
  }
  .sit-search button:hover{
    background: gray;
  
  }
  
  nav{
    background: white;
    text-align: center;
  }
  nav ul{
    list-style: none;
  }
  nav ul li{
    display: inline;
  }
  nav ul li a{
    font-size: large;
    color: gray;
    margin-top: 1px;
    margin-right:40px;
    margin-bottom: 10px;
    margin-left: 20px; 
    display: inline-block;
  
  }
  nav ul li a:hover:not(.active) {
    background: whitesmoke;
    
  }

.Text {

  font-size: large;
  font-family:  Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
  text-align:center;
  color:#a1a1a1;
  width:auto;
  height:auto;
  background-color: white;
} 

#HD {
  font-family: Georgia, serif;
  font-size: x-large;
  text-align: center;
  color: rgb(142, 141, 141);

}

.LOG{
  background-position:absolute;
  top : 200px;
  float:right;
}

.search-container {
  display: flex;
  margin:auto;
  

}

.search-container button {
  top:750px;
  padding: 7px 12px;
  background-color:#c0c0c0;

  color: white;
  border: none;
  border-radius: 200px;
  cursor: pointer;
  
}

.search-container button:hover {
  background-color: #241e1e;
}

  
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .faq {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
        }
        .faq h2 {
            font-size: 18px;
            margin: 0 0 10px;
        }
        .faq p {
            margin: 0 0 10px;
        }

        .footer {
    background-color: #f2f2f2;
    padding: 20px;
    text-align: center;
  }
  a:link 
  { text-decoration: none;}

  .FT-Up{
    width:auto;
    background: #8B8B8B;
    height: 200px;
  }
  .L-col{
    width:300px;
    float:left;
    margin-left: 31.5px;
  
  }
  .L-col h2{
    font-size: 24px;
    margin-top: 63px;
    margin-left: 120px;
    color: whitesmoke;
    
  }
  .L-col a{
     font-size: 15px;
     margin-left: 45px;
     margin-top:13px;
     color: white;
     
  }
  .L-col img{
    margin-top: 40px;
    margin-left: 230px;
  }
  #Number-align{
    margin-left: 115px;
    letter-spacing: 2px;
    font-family: 'Times New Roman', serif;
  }	 
  #Mail-align{
    letter-spacing: 2px;
    font-family: 'Times New Roman', serif;
  
  }
  .L-col h3{
    font-size: 18px;
    margin-top: 80px;
    margin-left: 540px;
    color: whitesmoke;
  }
  .FT-Down{
      font-size: smaller;
      text-align: center;
      padding: 13px;
  
  }
  .social-Icon{
    
    margin-top: 110px;
    margin-right: 89px;
    float: right;
  }
  .social-Icon ul{
    list-style: none;
  }
  .social-Icon ul li{
    display:inline;
  }
  .social-Icon ul li a{
    
     margin-left: 8px;
     color: white;
  }


    </style>
</head>
<body>
    
    <heder>

    <div class="UP">
       <div class="top-bar clearfix">
         <div class="top-bar-links">
           <ul>
             <li><a href = "#">Sign Up  </a></li>
             <li><a href ="#">Log In </a></li>
           </ul>
         </div><!-- top-bar-link -->	
  
         <div class="sit-search">
             <input type="text" placeholder="Search..">	 
             <button type="submit"><i class="fas fa-search"></i></button>	
         </div><!-- site-search -->
         
       </div><!-- top-bar clearfix -->
    </div><!--UP-->
    
    <div class="logo">
      <center><img src="images/55 copy.png" alto="LOGO" width="500" height="200"></center>
    </div><!-- logo -->
  
    <nav>
      <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="#">GALLERY</a></li>
        <li><a href="index.html">PACKAGES</a></li>
        <li><a href="#">ABOUT US</a></li>
        <li><a href="#">CONTACT US</a></li>
      </ul>
    </nav>
  
</ul></center>



    <div class="container">
        <h1>Frequently Asked Questions</h1>
        <?php foreach ($faqs as $faq): ?>
            <div class="faq">
                <h2><?php echo $faq['question']; ?></h2>
                <p><?php echo $faq['answer']; ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <footer>
    <div class="FT-Up clearfix">
  
      <div class="L-col">
        <h2>Contact Us</h2>
        <a id="Mail-align" href="#">curiousmomentaweddings@gmail.com</a><br>
        <a id="Number-align" href="#">(+94) 712844512 </a>
      </div><!-- L-col -->
  
      <div class="L-col">
        <center><img src="images/FT.png" width="280px" height="120px"><center>
      </div><!-- L-col -->
  
      <div class="L-col">
        <h3>FOLLOW</h3>
      </div><!-- L-col -->	
        <div class="social-Icon">
          <ul>
                  
                  <li><a href="#"><i class="fa-brands fa-square-facebook fa-fw"></i></a></li>
                  <li><a href="#"><i class="fa-brands fa-instagram fa-fw"></i></a></li>
                  <li><a href="#"><i class="fa-brands fa-linkedin fa-fw"></i></a></li>
                  <li><a href="#"><i class="fa-brands fa-youtube fa-fw"></i></a></li>
                  <li><a href="#"><i class="fa-brands fa-pinterest fa-fw"></i></a></li>
                  <li><a href="#"><i class="fa-brands fa-twitter fa-fw"></i></a></li>
  
                </ul>
        </div><!-- social-Icon -->
  
      
    </div>
  <hr>
    <div class="FT-Down">
          <p>
            © 2023 CURIOS MOMENTA. All rights reserved.
          </p>
      </div><!--FT-DWN-->
  
  
  </footer>

</body>
</html>
