

<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>php_project</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
 
</head>
<body>
	<div style="width: 100%; height: 20px; text-align: center; background: #DCB7FC;">
	<a href="logout.php">Logout</a>
</div>
<section class="header">

  <nav>
    <a href="index.html"><img src="logo.png">
      <div class="nav-links">
       
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="about.php">ABOUT</a></li>
          <li><a href="course.php">COURSE</a></li>
          <li><a href="blog.php">BLOG</a></li>
          <li><a href="contact.php">CONTACT</a></li>
        </ul>
      </div>
      
     </nav>
  <div class="text-box">
    <h1>World's Biggest University</h1>
    <p>Making website is now one of the easier thing in the world.you just need to learn HTML,<br>CSS and java script and you are good to</p>
   <a href="" class ="hero-btn">visit Us to known more</a>
  
</section>




<!-------course------>


<section class="course">

  <h1>Course we offer</h1>
  <p>Lerem ipsum dolor silt amer, consecters asipiscing elit.</p>


  <div class="row">
    <div class="course-col">
      <h3>Intermediate</h3>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
    </div>
    <div class="course-col">
      <h3>Degree</h3>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>
    </div>
     <div class="course-col">
      <h3>post graduation</h3>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</p>

</section>



<!-------campus----->


<section class="campus">
  <h1>Our Global campus</h1>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
  <div class="row">
    <div class="campus-col">
      <img src="london.png">
      <div class="layer">
        <h3>LONDON</h3>
      </div>
    </div>

    <div class="campus-col">
      <img src="newyork.png">
      <div class="layer">
        <h3>NEW YORK</h3>
      </div>
    </div>

    <div class="campus-col">
      <img src="washington.png">
      <div class="layer">
        <h3>WASHINHTON</h3>
      </div>
    </div>

  </div>


</section>



<!----------facilities------->

<section class="facilities">
  <h1>Our facilities</h1>
  <p>Lorem Ipsum is simply dummy text of the printing and type setting industry</p>
  <div class="row">
        <div class="facilities-col">
           <img src="library.png">
           <h3>World class Library</h3>
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        </div>
      

       <div class="facilities-col">
           <img src="basketball.png">
           <h3>Large play ground</h3>
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
        </div>

        <div class="facilities-col">
           <img src="cafeteria.png">
           <h3>tasty and healthy food</h3>
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
         </div>

</div>


</section>



<!----------test imonials------->

<section class="testimonials">
  <h1>What Our Stendent Says</h1>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
  <div class="row">
    <div class="testimonial-col">
      <img src="user1.jpg">
      <div>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
       </p>
       <h3>Christine berl</h3>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
      </div>
    </div>

<div class="testimonial-col">
      <img src="user2.jpg">
      <div>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
       </p>
       <h3>Dived byer </h3>
        <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fa fa-star"></i>
       <i class="fas fa-star-half-alt"></i>
      </div>
    </div>


</div>
</section>


<!----------call to action------>



<section class="cta">
  <h1>Enter for our various online courses <br>anywhere from the world
  </h1>
  <a href="" class="hero-btn">contact us</a>
  
</section>

<!----------footer------>


<section class="footer">
  <h4>About Us</h4>
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
  <div class="icons">
  <i class="fab fa-facebook"></i>
  <i class="fab fa-twitter"></i>
  <i class="fab fa-instagram"></i>
  <i class="fab fa-linkedin"></i>
</div>
<p>all copy reserved@2022</p>
</section>

















</body>
</html>