<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <script src="script.js" defer></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
<title>Document</title>


<?php 
include('login.php');  
$con=mysqli_connect("localhost","root","","RIPD");

  $username = $_SESSION['name'];
  
?>
<script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
</script>
<script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>
</head>
<body>

  <nav>
    <input id="nav-toggle" type="checkbox">
    <div class="logo"><a href="index.htm"></a>   
    <img src="image/logo1.jpg" title="Rest In Peace Of Department">
      
    </div>
    <ul class="links">
      <div class="dash-name" style="color: white; position:absolute; left:12em;">
      <div class="wlc" style="position:absolute;"> Welcome&nbsp<?php echo $username ?></div>
      <div class="psign">
      <a href="logout.php">
      <div class="fa fa-sign-out" style="position:relative; margin-left:10px;left:6em;font-size:20px"></div>
      </a>  
    </div>
      </div>
      <li><a href="index-dash.php">HOME</a></li>
      <li><a href="product-dash.php">PRODUCT</a></li>
      <li><a href="contact.htm">CONTACT</a></li>
      <li><a href="about-dash.php">ABOUT&nbspUS</a></li>
      <div class="msign">
      <div class="fa fa-sign-out" style="position:relative;"></div>
      </div>
    </ul>
    <a href="login.htm" class="fa fa-user" title="Login" style="font-size: 30px;"></a>
    <label for="nav-toggle" class="icon-burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </label>
  </nav>
  
  <!-- Slideshow container -->
 <div class="slideshow-container">
    
  <div class="container">

    <div class="mySlides fade">
  <img src="image/s1.jpg"> 
  <div class="t1">GEFORCE RTX??? 3090</div>
  <div class="tr1"><span-1>???</span-1>A great time<br>to upgrade<br>
   <span-2>???RIPDGAMER</span-2></div>
   <button class="bt1">LEARN MORE</button>

  <div class="sm1" src="image/sm1.jpg"></div>
  </div>
  
<div class="mySlides fade">
  <img src="image/s2.jpg">
  <div class="t2">GEFORCE RTX 30 SERIES LAPTOPS</div>
  <div class="tr2"><span-1>???</span-1>fastest laptop GPU just arrived
   <span-2><br>???PCWORLD</span-2></div>
   <button class="bt2">LEARN MORE</button>
  <div class="sm2" src="image/sm2.jpg"></div>
</div>

<div class="mySlides fade">
  <img src="image/s3.jpg">
  <div class="t3">NVIDIA DLSS</div>
  <div class="tr3">MAX FPS.<br>MAX QUALITY.<br>
    POWERED BY AI.</div>
  <button class="bt3">LEARN MORE</button>
  <div class="sm3" src="image/sm2.jpg"></div>
</div>

<div class="mySlides fade">
  <img src="image/s4.jpg">
  <div class="t4">FRAMES WIN GAMES</div>
  <div class="tr4">NVIDIA REFLEX AVAILABLE NOW</div>
  <button class="bt4">LEARN MORE</button>
  <div class="sm4" src="image/sm4.jpg"></div>
</div>
</div>
</div>

<!--_________Gallery__________-->

<div class="gallery-wrapper">
  <div class="image-wrapper">
      <img src="image/g1.jpg" alt="">
      <div class="desc">
          <div class="desc-title">NVIDIA DLSS</div>
          <div class="desc-desc">NVIDIA DLSS (Deep Learning Super Sampling) is groundbreaking AI rendering technology that takes your visual fidelity to a whole new level using dedicated Tensor Core AI processors on GeForce RTX??? GPUs.</div>
      </div> 
      <button class="descbtn">LEARN MORE</button>
  </div>
  
  <div class="image-wrapper">
        <img src="image/g2.jpg" alt=""> 
        <div class="desc">
            <div class="desc-title">NVIDIA REFLEX</div>
            <div class="desc-desc">Acquire targets faster, react quicker, and improve aim through a revolutionary suite of technologies built to measure and optimize system latency for competitive games.<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div>
        </div> 
        <button class="descbtn">LEARN MORE</button>
    </div>

    <div class="image-wrapper">
        <img src="image/g3.jpg" alt=""> 
        <div class="desc">
            <div class="desc-title">NVIDIA BROADCAST</div>
            <div class="desc-desc">The NVIDIA Broadcast app transforms your gaming space into a home studio. Take your livestreams, voice chats, and video calls to the next level with AI-powered voice and video effects like noise removal and virtual background.</div>
        </div> 
        <button class="descbtn">LEARN MORE</button>
    </div>
</div>
<div class="hrbtm">
<hr>
</div>

<div class="flink">  
<ul>
    <li><a href="index.html">Product</a><hr></li>
    <li><a href="product.html">Comunity & News</a><hr></li>
    <li><a href="contact.html">Support</a><hr></li>
</ul>
</div>


<div class="flist">
  <div class="flist1">
      <li><a href="#">Graphics Card</a></li>
      <li><a href="#">Laptop</a></li>
      <li><a href="#">CPU</a></li>
      <li><a href="#">Keyboard</a></li>
      <li><a href="#">Mouse</a></li>
  </div>

  <div class="flist2">
    <li><a href="#">Featured Games </a></li>
  </div>

  <div class="flist3">
    <li><a href="#">Drivers</a></li>
    <li><a href="#">Games</a></li>
  </div>
</div>


<div class="flistm">
  <ul>
    <li style="font-size: 15px; color:white;">Product</li>
    <hr>
    <li>Graphics Card</li>
    <li>Laptop</li>
    <li>CPU</li>
    <li>Keyboard</li>
    <li>Mouse</li>
  </ul>

  <ul>
    <li style="font-size: 15px; color:white;">Comunity & News</li>
    <hr>
    <li>Featured Games</li>
  </ul>

  <ul>
    <li style="font-size: 15px; color:white;">Support</li>
    <hr>
    <li>Drivers</li>
    <li>Games</li>
  </ul>
</div>
</div>

<div class="top">
  <button onclick="topFunction()" id="myBtn" title="Go to top">???</button>
</div>

  <footer class="footer-distributed">

      <div class="footer-right">
  
        <a href="#"><i class="fa fa-info" title="About Us" style="background-color: transparent; padding:3px;"></i></a>
        <a href="#"><i class="fa fa-facebook" title="facebook"style="background-color: transparent;padding:3px;"></i></a>
        <a href="#"><i class="fa fa-twitter" title="twitter"style="background-color: transparent;padding:3px;"></i></a>
        <a href="#"><i class="fa fa-instagram" title="instagram"style="background-color: transparent;padding:3px;"></i></a>
  
      </div>
  
      <div class="footer-left">
        Copyright ?? 2021 ripdshop.com
      </div>

  </footer>


</body>
</html>