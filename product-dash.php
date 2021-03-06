<!DOCTYPE htmll>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="product.css">
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
</head>
<body>

  <nav>
    <input id="nav-toggle" type="checkbox">
    <div class="logo"><a href="index.htm"></a>   
    <img src="image/logo1.jpg" title="Rest In Peace Of Department">
      
    </div>
    
      <div class="dash-name" style="color: white; position:absolute; left:12em;">
      <div class="wlc" style="position:absolute;"> Welcome&nbsp<?php echo $username ?></div>
      <div class="psign">
      <a href="logout.php">
      <div class="fa fa-sign-out" style="position:relative; margin-left:10px;left:6em;font-size:20px"></div>
      </a>  
    </div>
	<ul class="links">
      <li><a href="index.htm">HOME</a></li>
      <li><a href="product.htm">PRODUCT</a></li>
      <li><a href="contact.htm">CONTACT</a></li>
      <li><a href="about.php">ABOUT&nbspUS</a></li>
    </ul>
    <a href="about.php" class="fa fa-user" title="Login" style="font-size: 30px;"></a>
    <label for="nav-toggle" class="icon-burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </label>
  </nav>



  <!--_______________FILTER________________-->

<div class="filter">
<div class="title-filter">Filters</div>
<hr>
  <div class="brand-filter">Brand</div>
  <label class="section-filter">HP
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
  <label class="section-filter">MSI
    <input type="checkbox">
    <span class="checkmark" onclick=""></span>
  </label>
  <label class="section-filter">ASUS
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
  <label class="section-filter">AORUS
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
  <label class="section-filter">RAZER
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
  <label class="section-filter">GIGABYTE
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>

<br>

  <div class="price-filter">Price</div>
  <label class="section-filter">???1,00,00-1,80,000
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
  <label class="section-filter">???1,80,000-2,00,000
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
  <label class="section-filter">???2,00,000-2,70,000
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
  <label class="section-filter">???2,70,000-3,00,000
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
  
  <br>

  <div class="cpu-type-filter">CPU Type</div>
  <label class="section-filter">AMD Ryzen 5
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
  <label class="section-filter">AMD Ryzen 7
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
  <label class="section-filter">Intel Core i5
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
  <label class="section-filter">Intel Core i7
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
  <label class="section-filter"> Intel Core i9
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>

  <br>

  <div class="cpu-speed-filter">Maximum CPU Speed</div>
  <label class="section-filter">Up to 1.5 GHz
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
  <label class="section-filter">1.6 - 2 GHz
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
  <label class="section-filter">2.1 - 2.5 GHz
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
  <label class="section-filter">2.5 GHz & more
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>

  <br>
  
  <div class="memory-filter">Memory Size</div>
  <label class="section-filter">4 GB
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
  <label class="section-filter">6 GB
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
  <label class="section-filter">8 GB
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
  <label class="section-filter">12 GB
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
  <label class="section-filter">16 GB & more
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>

  <br>

  <div class="hdd-filter">HDD Size</div>
  <label class="section-filter">160 - 249 GB
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
  <label class="section-filter">250 - 499 GB
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
  <label class="section-filter">500 - 999 GB
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
  <label class="section-filter">1TB & More
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>

  <br>

  <div class="ssd-filter">SSD Size</div>
  <label class="section-filter">160 - 249 GB
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
  <label class="section-filter">250 - 499 GB
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
  <label class="section-filter">500 - 999 GB
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
  <label class="section-filter">1TB & More
    <input type="checkbox">
    <span class="checkmark"></span>
  </label>
</div>

<div class="vl"></div>

    <!--_________Gallery__________-->

    <div class="gallery-wrapper">
        <div class="laptop-wrapper"  id="laptop">
        <img src="image/l1.png">
            <div class="desc">
                <div class="desc-title">MSI GF75 17.3", GEFORCE RTX 3060, INTEL CORE I7, 512 GB SSD, 1 TB HDD, 16 GB</div>
                <div class="desc-desc">
                <ul>
                    <li>GPU: GeForce RTX 3060</li>
                    <li>Display: 17.3" | 1920 x 1080</li>
                    <li>CPU: Intel Core i7</li>
                    <li>Memory: 16 GB DDR4-SDRAM</li>
                    <li>Storage: 512 GB SSD, 1 TB HDD</li>
                </ul>
                <br>
                    <a href="">More Description</a>
                </div>
            </div> 
            <div class="price">???1,50,000</div>
            <button class="descbtn1"> <a href="b1.htm">BUY NOW </a></button>
        </div>
        
        <div class="laptop-wrapper" id="laptop">
              <img src="image/l2.png"> 
              <div class="desc">
                  <div class="desc-title">AORUS 15G 15.6", GEFORCE RTX 3060, INTEL CORE I7, 512 GB SSD, 16 GB<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div>
                  <div class="desc-desc">
                <ul>
                    <li>GPU: GeForce RTX 3060</li>
                    <li>Display: 15.6" | 1920 x 1080</li>
                    <li>CPU: Intel Core i7</li>
                    <li>Memory: 16 GB DDR4-SDRAM</li>
                    <li>Storage: 512 GB SSD</li>
                </ul>
                <br>
                    <a href="">More Description</a>
                </div>
                <div class="price">???2,00,000</div>
              </div> 
              <button class="descbtn2">BUY NOW</button>
          </div>
      
          <div class="laptop-wrapper" id="laptop">
              <img src="image/l3.png"> 
              <div class="desc">
                  <div class="desc-title">GIGABYTE AERO 15 OLED 15.6", GEFORCE RTX 3060, INTEL CORE I7, 512 GB SSD, 16 GB</div>
                  <div class="desc-desc">
                <ul>
                    <li>GPU: GeForce RTX 3060</li>
                    <li>Display: 15.6" | 3840 x 2160</li>
                    <li>CPU: Intel Core i7</li>
                    <li>Memory: 16 GB DDR4-SDRAM</li>
                    <li>Storage: 512 GB SSD</li>
                </ul>
                <br>
                    <a href="">More Description</a>
                </div>
                <div class="price">???2,30,000</div>
              </div> 
              <button class="descbtn3">BUY NOW</button>
          </div>

          <div class="laptop-wrapper" id="laptop">
            <img src="image/l4.png"> 
            <div class="desc">
                <div class="desc-title">MSI GP66 15.6", GEFORCE RTX 3070, INTEL CORE I7, 512 GB SSD, 16 GB<br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp;&nbsp;</div>
                <div class="desc-desc"> 
                <ul>
                    <li>GPU: GeForce RTX 3070</li>
                    <li>Display: 15.6" | 1920 x 1080</li>
                    <li>CPU: Intel Core i7</li>
                    <li>Memory: 16 GB DDR4-SDRAM</li>
                    <li>Storage: 512 GB SSD</li>
                </ul>
                <br>
                    <a href="">More Description</a>
                </div>
                <div class="price">???2,50,000</div>
            </div> 
            <button class="descbtn4">BUY NOW</button>
        </div>

        <div class="laptop-wrapper" id="laptop">
            <img src="image/l5.png"> 
            <div class="desc">
                <div class="desc-title">RAZER BLADE 15 BASE 15.6", GEFORCE RTX 3060, INTEL CORE I7, 512 GB SSD, 16 GB</div>
                <div class="desc-desc">
                <ul>
                    <li>GPU: GeForce RTX 3060</li>
                    <li>Display: 15.6" | 1920 x 1080</li>
                    <li>CPU: Intel Core i7</li>
                    <li>Memory: 16 GB DDR4-SDRAM</li>
                    <li>Storage: 512 GB SSD</li>
                </ul>
                <br>
                    <a href="">More Description</a>
                </div>
                <div class="price">???2,70,000</div>
            </div> 
            <button class="descbtn5">BUY NOW</button>
        </div>

        <div class="laptop-wrapper" id="laptop">
            <img src="image/l6.png" > 
            <div class="desc">
                <div class="desc-title">GIGABYTE AERO 15 OLED 15.6", GEFORCE RTX 3070, INTEL CORE I7, 1 TB SSD, 32 GB</div>
                <div class="desc-desc">
                <ul>
                    <li>GPU: GeForce RTX 3070</li>
                    <li>Display: 15.6" | 3840 x 2160</li>
                    <li>CPU: Intel Core i7</li>
                    <li>Memory: 32 GB DDR4-SDRAM</li>
                    <li>Storage: 1 TB SSD</li>
                </ul>
                <br>
                    <a href="">More Description</a>
                </div>
                <div class="price">???2,83,000</div>
            </div> 
            <button class="descbtn6">BUY NOW</button>
        </div>

        <div class="laptop-wrapper" id="laptop">
            <img src="image/l7.png"> 
            <div class="desc">
                <div class="desc-title">MSI GE66 15.6", GEFORCE RTX 3070, INTEL CORE I7, 1 TB SSD, 32 GB<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div>
                <div class="desc-desc">
                <ul>
                    <li>GPU: GeForce RTX 3070</li>
                    <li>Display: 15.6" | 1920 x 1080</li>
                    <li>CPU: Intel Core i7</li>
                    <li>Memory: 32 GB DDR4-SDRAM</li>
                    <li>Storage: 1 TB SSD</li>
                </ul>
                <br>
                    <a href="">More Description</a>
                </div>
                <div class="price">???2,97,000</div>
            </div> 
            <button class="descbtn7">BUY NOW</button>
        </div>

        <div class="laptop-wrapper" id="laptop">
            <img src="image/l8.png"> 
            <div class="desc">
                <div class="desc-title">RAZER BLADE PRO 17 17.3", GEFORCE RTX 3060, INTEL CORE I7, 512 GB SSD, 16 GB</div>
                <div class="desc-desc">
                <ul>
                    <li>GPU: GeForce RTX 3080</li>
                    <li>Display: 15.6" | 1920 x 1080</li>
                    <li>CPU: Intel Core i7</li>
                    <li>Memory: 32 GB DDR4-SDRAM</li>
                    <li>Storage: 1 TB SSD</li>
                </ul>
                <br>
                    <a href="">More Description</a>
                </div>
                <div class="price">???3,00,000</div>
            </div> 
            <button class="descbtn8">BUY NOW</button>
        </div>






<!--GRAPHICS CARD-->
        <div class="graphics-wrapper" id="graphics-card">
            <img src="image/gc1.png" >
            <div class="desc">
                <div class="desc-title">ASUS ROG-STRIX-RTX3090-24G-GAMING</div>
                <div class="desc-desc">
                <ul>
                    <li>Cooling System: Triple Fan</li>
                    <li>Boost Clock Speed: 2725 MHz</li>
                    <li>GPU Memory Size: 24 GB</li>
                </ul>
                <br>
                    <a href="">More Description</a>
                </div>
                <div class="price">???1,62,000</div>
            </div> 
            <button class="descbtn1">BUY NOW</button>
        </div>
        
        <div class="graphics-wrapper" id="graphics-card">
              <img src="image/gc2.png"> 
              <div class="desc">
                  <div class="desc-title">MSI GEFORCE RTX 3090 VENTUS 3X 24G OC</div>
                  <div class="desc-desc">
                <ul>
                    <li>Cooling System: Triple Fan</li>
                    <li>Boost Clock Speed: 1725 MHz</li>
                    <li>GPU Memory Size: 24 GB</li>
                </ul>
                <br>
                    <a href="">More Description</a>
                </div>
                <div class="price">???1,55,900</div>
              </div> 
              <button class="descbtn2">BUY NOW</button>
          </div>
      
          <div class="graphics-wrapper" id="graphics-card">
              <img src="image/gc3.png"> 
              <div class="desc">
                  <div class="desc-title">ASUS TUF-RTX3090-O24G-GAMING</div>
                  <div class="desc-desc">
                <ul>
                    <li>Cooling System: Triple Fan, Axial-Tech</li>
                    <li>Boost Clock Speed: --</li>
                    <li>GPU Memory Size: 24 GB</li>
                </ul>
                <br>
                    <a href="">More Description</a>
                </div>
                <div class="price">???1,50,000</div>
              </div> 
              <button class="descbtn3">BUY NOW</button>
          </div>

          <div class="graphics-wrapper" id="graphics-card">
            <img src="image/gc4.png"> 
            <div class="desc">
                <div class="desc-title">NVIDIA GEFORCE RTX 3090</div>
                <div class="desc-desc"> 
                <ul>
                    <li>Cooling System: Fan</li>
                    <li>Boost Clock Speed: 1.70 GHz</li>
                    <li>GPU Memory Size: 24 GB</li>
                </ul>
                <br>
                    <a href="">More Description</a>
                </div>
                <div class="price">???1,10,500</div>
            </div> 
            <button class="descbtn4">BUY NOW</button>
        </div>



<!-----------------Monitor-------------------->
        <div class="monitor-wrapper" id="monitor">
                    <img src="image/l1.png">
                    <div class="desc">
                        <div class="desc-title">MSI GF75 17.3", GEFORCE RTX 3060, INTEL CORE I7, 512 GB SSD, 1 TB HDD, 16 GB</div>
                        <div class="desc-desc">
                        <ul>
                            <li>GPU: GeForce RTX 3060</li>
                            <li>CPU: Intel Core i7</li>
                            <li>Memory: 16 GB DDR4-SDRAM</li>
                            <li>Storage: 512 GB SSD, 1 TB HDD</li>
                        </ul>
                        <br>
                            <a href="">More Description</a>
                        </div>
                        <div class="price"></div>
                    </div> 
                    <button class="descbtn1">BUY NOW</button>
        </div>


        <div class="monitor-wrapper" id="monitor">
            <img src="image/l1.png">
            <div class="desc">
                <div class="desc-title">MSI GF75 17.3", GEFORCE RTX 3060, INTEL CORE I7, 512 GB SSD, 1 TB HDD, 16 GB</div>
                <div class="desc-desc">
                <ul>
                    <li>GPU: GeForce RTX 3060</li>
                    <li>CPU: Intel Core i7</li>
                    <li>Memory: 16 GB DDR4-SDRAM</li>
                    <li>Storage: 512 GB SSD, 1 TB HDD</li>
                </ul>
                <br>
                    <a href="">More Description</a>
                </div>
                <div class="price"></div>
            </div> 
            <button class="descbtn1">BUY NOW</button>
        </div>
      
        <div class="monitor-wrapper" id="monitor">
                <img src="image/l2.png"> 
                <div class="desc">
                    <div class="desc-title">AORUS 15G 15.6", GEFORCE RTX 3060, INTEL CORE I7, 512 GB SSD, 16 GB</div>
                    <div class="desc-desc">
                <ul>
                    <li>GPU: GeForce RTX 3060</li>
                    <li>Display: 15.6" | 1920 x 1080</li>
                    <li>CPU: Intel Core i7</li>
                    <li>Memory: 16 GB DDR4-SDRAM</li>
                    <li>Storage: 512 GB SSD</li>
                </ul>
                <br>
                    <a href="">More Description</a>
                </div>
                <div class="price"></div>
                </div> 
                <button class="descbtn2">BUY NOW</button>
            </div>
        
            <div class="monitor-wrapper" id="monitor">
                <img src="image/l3.png"> 
                <div class="desc">
                    <div class="desc-title">GIGABYTE AERO 15 OLED 15.6", GEFORCE RTX 3060, INTEL CORE I7, 512 GB SSD, 16 GB</div>
                    <div class="desc-desc">
                <ul>
                    <li>GPU: GeForce RTX 3060</li>
                    <li>Display: 15.6" | 3840 x 2160</li>
                    <li>CPU: Intel Core i7</li>
                    <li>Memory: 16 GB DDR4-SDRAM</li>
                    <li>Storage: 512 GB SSD</li>
                </ul>
                <br>
                    <a href="">More Description</a>
                </div>
                <div class="price"></div>
                </div> 
                <button class="descbtn3">BUY NOW</button>
            </div>

            <div class="monitor-wrapper" id="monitor">
            <img src="image/l4.png"> 
            <div class="desc">
                <div class="desc-title">MSI GP66 15.6", GEFORCE RTX 3070, INTEL CORE I7, 512 GB SSD, 16 GB</div>
                <div class="desc-desc"> 
                <ul>
                    <li>GPU: GeForce RTX 3070</li>
                    <li>Display: 15.6" | 1920 x 1080</li>
                    <li>CPU: Intel Core i7</li>
                    <li>Memory: 16 GB DDR4-SDRAM</li>
                    <li>Storage: 512 GB SSD</li>
                </ul>
                <br>
                    <a href="">More Description</a>
                </div>
                <div class="price"></div>
            </div> 
            <button class="descbtn4">BUY NOW</button>
        </div>

        <div class="monitor-wrapper" id="monitor">
            <img src="image/l5.png" > 
            <div class="desc">
                <div class="desc-title">RAZER BLADE 15 BASE 15.6", GEFORCE RTX 3060, INTEL CORE I7, 512 GB SSD, 16 GB</div>
                <div class="desc-desc">
                <ul>
                    <li>GPU: GeForce RTX 3060</li>
                    <li>Display: 15.6" | 1920 x 1080</li>
                    <li>CPU: Intel Core i7</li>
                    <li>Memory: 16 GB DDR4-SDRAM</li>
                    <li>Storage: 512 GB SSD</li>
                </ul>
                <br>
                    <a href="">More Description</a>
                </div>
                <div class="price"></div>
            </div> 
            <button class="descbtn5">BUY NOW</button>
        </div>

        <div class="monitor-wrapper" id="monitor">
            <img src="image/l6.png"> 
            <div class="desc">
                <div class="desc-title">GIGABYTE AERO 15 OLED 15.6", GEFORCE RTX 3070, INTEL CORE I7, 1 TB SSD, 32 GB</div>
                <div class="desc-desc">
                <ul>
                    <li>GPU: GeForce RTX 3070</li>
                    <li>Display: 15.6" | 3840 x 2160</li>
                    <li>CPU: Intel Core i7</li>
                    <li>Memory: 32 GB DDR4-SDRAM</li>
                    <li>Storage: 1 TB SSD</li>
                </ul>
                <br>
                    <a href="">More Description</a>
                </div>
                <div class="price"></div>
            </div> 
            <button class="descbtn6">BUY NOW</button>
        </div>

        <div class="monitor-wrapper" id="monitor">
            <img src="image/l7.png"> 
            <div class="desc">
                <div class="desc-title">MSI GE66 15.6", GEFORCE RTX 3070, INTEL CORE I7, 1 TB SSD, 32 GB</div>
                <div class="desc-desc">
                <ul>
                    <li>GPU: GeForce RTX 3070</li>
                    <li>Display: 15.6" | 1920 x 1080</li>
                    <li>CPU: Intel Core i7</li>
                    <li>Memory: 32 GB DDR4-SDRAM</li>
                    <li>Storage: 1 TB SSD</li>
                </ul>
                <br>
                    <a href="">More Description</a>
                </div>
                <div class="price"></div>
            </div> 
            <button class="descbtn7">BUY NOW</button>
        </div>

        <div class="monitor-wrapper" id="monitor">
            <img src="image/l8.png"> 
            <div class="desc">
                <div class="desc-title">RAZER BLADE PRO 17 17.3", GEFORCE RTX 3060, INTEL CORE I7, 512 GB SSD, 16 GB</div>
                <div class="desc-desc">
                <ul>
                    <li>GPU: GeForce RTX 3080</li>
                    <li>Display: 15.6" | 1920 x 1080</li>
                    <li>CPU: Intel Core i7</li>
                    <li>Memory: 32 GB DDR4-SDRAM</li>
                    <li>Storage: 1 TB SSD</li>
                </ul>
                <br>
                    <a href="">More Description</a>
                </div>
                <div class="price"></div>
            </div> 
            <button class="descbtn8">BUY NOW</button>
        </div>
    </div>

</body>
</html>