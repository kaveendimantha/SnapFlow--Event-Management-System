<!DOCTYPE html>
<html>
<head>
  <title>Photography Site - Package Details</title>
  <link rel="stylesheet" href="../css/weddingpackage.css">
  <?php
      include_once'header.php'
?>
</head>

<body>
   



  <div class="slideshow">
    <img class="active" src="../Image/package/Picture1.png" alt="Slideshow Image 1">
    <img src="../Image/package/oo.jpeg" alt="Slideshow Image 2">
    <img src="../Image/package/DSC_6485.jpg" alt="Slideshow Image 3">
  </div>

  <div>
    
    <div class="text">
        <h2>Wedding Package</h2><br>
      <p>
        By selecting our Wedding Photography Package, you are handing your most precious moments to a team of specialists dedicated to capturing the spirit of your love story. Allow us to create a visual narrative that captures the magic of your wedding day, allowing you to revisit those priceless moments for years to come. <br><br>
       
    </div>

    <div class="text1">
        <h3>Diamond Class</h3><br>
      <p>
        <ul>
           <li>Wedding and homecoming shoot at a preferred location </li><br>
           <li>16 x 24 “ Framed Enlargement - 2</li><br>
           <li>12 x 30 “ Wedding magazine Album - 60 pages </li><br>
           <li>6 x 8” One side thankyou card - 200 </li><br>
           <li>Full function coverage</li><br>
           <li>All edited soft copies </li><br>
           <li> WEDDING & HOMECOMING DAY (02 DAYS) 200 000 LKR</li>

        </ul> 
       
    </div>

    <div class="text1">
        <h3>Gold Class</h3><br>
      <p>
        <ul>
          <li> Wedding and homecoming shoot at a preferred location</li><br>
          <li> 16 x 24 “ Framed Enlargement - 2</li><br>
          <li>6 x 8” One side thankyou card - 200 </li><br>
          <li> Full function coverage</li><br>
          <li>All edited soft copies</li><br>
          <li>WEDDING & HOMECOMING DAY( 02 DAYS) 160 000 LKR </li>
        </ul>
       
    </div>

    <div class="text1">
        <h3>Silver Class</h3><br>
      <p>
        <ul>
          <li>Wedding shoot at a preferred location </li><br>
          <li>12 x 30 “ Fine art Album -60pages </li><br>
          <li>8 x 24 Separate family album </li><br>
          <li>16 x 24 “ Framed Enlargement - 4 </li><br>
          <li>6 x 8” One side thankyou card - 150 </li><br>
          <li> Full function coverage</li><br>
          <li> All edited soft copies</li><br>
          <li>WEDDING DAY ( 01 DAY) 120 000 LKR </li>


        </ul>
        
       
    </div>

    <div class="text1">
        <h3>Additional Information </h3><br>
      <p>
        <ul>
          <li>10 x 15 FRAMED ENLARGEMENT 3000 LKR</li><br>
          <li>12 x 18 FRAMED ENLARGEMENT 4500 LKR</li><br>
          <li>16 x 24 FRAMED ENLARGEMENT 8 000 LKR</li><br>
          <li>20 x 30 FRAMED ENLARGEMENT 10 000 LKR</li><br>
          <li>6 x 8 THANKYOU CARD 150 LKR</li>

        </ul>
       
       
    </div>
    
    <div class="booking-box">
        <h3>BOOK NOW</h3>
        <a href="LoginPage/Resgister.html" class="book-now-button">Book Now</a>
      </div>

  

  

    <script>
        const images = document.querySelectorAll('.slideshow img');
        let currentImage = 0;
    
        setInterval(() => {
          images[currentImage].classList.remove('active');
          currentImage = (currentImage + 1) % images.length;
          images[currentImage].classList.add('active');
        }, 3000);
      </script>
<?php
      include_once'footer.php'
?>
</body>
</html>
