<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Play&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Reggae+One&display=swap" rel="stylesheet">
    <title>Document</title>

    
<?php 
include('login.php');  
$con=mysqli_connect("localhost","root","","RIPD");

  $username = $_SESSION['name'];
  
?>
</head>
<body>
 
      <nav>
        <input id="nav-toggle" type="checkbox">
        <div class="logo"><a href="product.htm">
          <img src="image/logo1.jpg" title="Rest In Peace Of Department">
        </a></div>
        <ul class="links">
        <div class="dash-name" style="color: white; position:absolute; left:12em;">
      <div class="wlc" style="position:absolute;"> Welcome&nbsp<?php echo $username ?></div>
      <div class="psign">
      <a href="logout.php">
      <div class="fa fa-sign-out" style="position:relative; margin-left:10px;left:6em;font-size:20px"></div>
      </a>  
    </div>
        <li><a href="index-dash.php">HOME</a></li>
        <li><a href="product-dash.php">PRODUCT</a></li>
        <li><a href="contact.htm">CONTACT</a></li>
        <li><a href="about-dash.php">ABOUT&nbspUS</a></li>
        </ul>
        <a href="login.htm" class="fa fa-user" title="Login" style="font-size: 30px;"></a>
        <label for="nav-toggle" class="icon-burger">
          <div class="line"></div>
          <div class="line"></div>
          <div class="line"></div>
        </label>
    </nav>


    <div class="abbg"><img src="image/bg1.jpg"></div>
      
    <div class="container1">
      <div class="heading1-main">OUR MISSION</div>
      <div class="heading1-sub">Unite gamers of diverse backgrounds to achieve their potential together in play. Through innovative technology and exceptional experiences, we can push boundaries to create a world without limits.</div>
    </div>

    <div class="container2">
      <div class="heading2-main">INNOVATION</div>
      <div class="heading2-sub">"Our relentless drive to sharpen the cutting edge has reshaped the world of gaming technology. By leading the charge to adopt the latest technologies, ROG sets standards across the entire industry of gaming systems and PC components."</div>
    </div>

    <div class="container3">
      <div class="heading3-main">INCEPTION</div>
      <div class="heading3-sub">"In 2006, an elite team of ASUS engineers and designers committed to creating the world’s best gaming experiences came together to start the Republic of Gamers (ROG). Since its founding, ROG has set new industry standards creating innovative, hardcore gaming gear that empowers gamers and enthusiasts everywhere."</div>
    </div>
    
</body>
</html>