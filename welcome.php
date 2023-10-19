<?php
session_start();
error_reporting(0);
include('connection.php');
$userprofile = $_SESSION['user_name'];
if ($userprofile == true) {
} else {
   header('location:signin_signup.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <link rel="stylesheet" href="CSS/welcome_style.css" />
   <link rel="stylesheet" href="CSS/welcomefooterstyle.css" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <!-- nav bar secrion started -->
   <header>
      <a href="#" class="logo">COSMOS</a>
      <ul class="navmenu">
         <li><a href="">HOME</a></li>
         <li><a href="">SHOP</a></li>
         <li><a href="">PRODUCTS</a></li>
         <li><a href="">PAGE</a></li>
         <li><a href="">DOCS</a></li>
         <li><a href="logout.php">LOG OUT</a></li>
      </ul>
      <div class="navicon">
         <a href=""><i class='bx bx-search-alt-2'></i></a>
         <a href=""><i class='bx bx-user'></i></a>
         <a href=""><i class='bx bx-cart'></i></a>
         <div class="bx bx-menu" id="menuicon"></div>
      </div>
   </header>
   <!-- navbar section ended here -->
   <div class="container">
      <h3 class="title"> Featured products </h3>
      <div class="products-container">
         <div class="product" data-name="p-1">
            <img src="Slider_Images/Mouse.jpg" alt="">
            <h4>Logitech G502 HERO High Performance Wired Gaming Mouse</h4>
            <div class="price">$13.00</div>
         </div>
         <div class="product" data-name="p-2">
            <img src="Slider_Images/laptop.jpg" alt="">
            <h4>Acer Predator Helios 300 / i7 11th Gen / RTX 3060 / 16GB RAM / 1TB SSD /15.6" QHD 165Hz Display</h4>
            <div class="price">$1265.00</div>
         </div>
         <div class="product" data-name="p-3">
            <img src="Slider_Images/Apple.jpeg" alt="">
            <h4>Apple MacBook Air 13-inch M1 256GB</h4>
            <div class="price">$2000.00</div>
         </div>
         <div class="product" data-name="p-4">
            <img src="Slider_Images/Iphone.jpg" alt="">
            <h4>Apple iPhone 11 Pro, US Version, 256GB, Silver</h4>
            <div class="price">$320.00</div>
         </div>
         <div class="product" data-name="p-5">
            <img src="Slider_Images/Banner_head.jpeg" alt="">
            <h4>Hell Dragon Series A65 Gaming RGB Headphone</h4>
            <div class="price">$12.00</div>
         </div>
         <div class="product" data-name="p-6">
            <img src="Slider_Images/keyboard.jpg" alt="">
            <h4>Wireless gaming Keyboard and Mouse,Rainbow Backlit Rechargeable Keyboard Mouse with 3800mAh Battery </h4>
            <div class="price">$75.00</div>
         </div>
      </div>
   </div>
   <div class="container">
      <h3 class="title"> Product Categories </h3>
      <div class="products-container">
         <div class="product" data-name="p-1">
            <img src="Slider_Images/laptop_gadgets.jpeg" alt="">
            <h4>Laptop Accessories</h4>
            <!-- Replace the price with a Shop Now button -->
            <button class="shop-now-button">Shop Now</button>
         </div>
         <div class="product" data-name="p-2">
            <img src="Slider_Images/mobilegadgets.jpg" alt="">
            <h4>Mobile Accessories</h4>
            <!-- Replace the price with a Shop Now button -->
            <button class="shop-now-button">Shop Now</button>
         </div>
         <div class="product" data-name="p-3">
            <img src="Slider_Images/Apple.jpeg" alt="">
            <h4>Apple MacBook Air 13-inch M1 256GB</h4>
            <!-- Keep the existing price tag for this product -->
            <div class="price">$2000.00</div>
         </div>
      </div>
   </div>
   <div class="bg_footer">
      <footer>
         <div class="footer_container">
            <div class="sec aboutus">
               <h2>About US</h2>
               <p>This project is devloped by the student of COSMOS College studying in fourth semester For the minor semester project .</p>
               <ul class="sci">
                  <li><a href="#"> <i class='bx bxl-facebook'></i></a> </li>
                  <li><a href="#"> <i class='bx bxl-twitter'></i></a> </li>
                  <li><a href="#"> <i class='bx bxl-instagram'></i></a> </li>
                  <li><a href="#"> <i class='bx bxl-youtube'></i></a> </li>
               </ul>
            </div>
            <div class="sec quicklinks">
               <h2>Support</h2>
               <ul>
                  <li> <a href="">FAQ</a></li>
                  <li><a href="">Privacy Polocy</a></li>
                  <li><a href="">Help</a></li>
                  <li><a href="">Contact</a></li>
               </ul>
            </div>
            <div class="sec quicklinks">
               <h2>SHOP</h2>
               <ul>
                  <li> <a href="">MENU</a></li>
                  <li><a href="">Mobile Accessories</a></li>
                  <li><a href="">Home Accessories</a></li>
                  <li><a href="">Grocery Store</a></li>
               </ul>
            </div>
            <div class="sec contact">
               <h2>Contact Us</h2>
               <ul class="info">
                  <li>
                     <span>
                        <i class='bx bx-phone-call'></i>
                     </span>
                     <p><a href="tel:+977 9807928148">+977 9807928148</a></p>
                  </li>
                  <li>
                     <span>
                        <i class='bx bx-envelope'></i>
                     </span>
                     <p><a href="mailto:sandeshprasai21@gmail.com">sandeshprasai21@gmail.com</a></p>
                  </li>
               </ul>
            </div>
         </div>
      </footer>
      <div class="copyrighttext">
         <p>All right reserved to Sandesh Prasai and team.</p>
      </div>
   </div>
</body>
<script>
   //The script toggles the menu icon on and off
   let menu = document.querySelector('#menuicon');
   let navmenu = document.querySelector('.navmenu');

   menu.onclick = () => {
      menu.classList.toggle('bx-x');
      navmenu.classList.toggle('open');
   }
</script>

</html>