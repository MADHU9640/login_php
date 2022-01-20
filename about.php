<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>about</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
 
</head>
<body>
  <div style="width: 100%; height: 20px; text-align: center; background: #DCB7FC;">
  <a href="logout.php">Logout</a>
</div><section class=" sub-header">

  <nav>
    <a href="#"><img src="logo.png">
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
  <h1>About Us</h1>
  
</section>

<!--------javascript for toggle menu----->
<script>
var navLinks = document.getElementByid('navLinks');
function showmenu() {
  navLinks.style.right = "0";
}
function hidemenu(){
  navLinks.style.right = "-200px";

}
</script>


<!------------about us content--------->
<section class="about-us">
  
  <div class="row">
    <div class="about-col">
      <h1>
        We are the worlds largest university </h1>
        <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
        <a href="" class="hero-btn red-btn">EXPLORE NOW</a>
    </div>
    <div class="about-col">
      <img src="about.jpg">

    </div>
  </div>

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