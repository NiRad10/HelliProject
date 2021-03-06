<?php
require('db.php');
require('authenticate.php');
?>
<!DOCTYPE html>
<html lang="fa">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width", initial-scale="1.0">
<title>کیو کد | Qcode</title>
<link rel="shortcut icon" href="#" type="image/x-icon">
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="body">
<header>
<div class="head-gradient"></div>
<nav id="" class="navbar">
    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">|||</button>
        <div id="myDropdown" class="dropdown-content">
        <ul class="menu-links">
          <a href="#"><i class="fa fa-home" aria-hidden="true"><p>خانه</p></i></a>
          <a href="#"><i class="fa fa-home" aria-hidden="true"><p>سوالات</p></i></a>
          <a href="#"><i class="fa fa-home" aria-hidden="true"><p>درباره ما</p></i></a>
        </ul>
      </div>
    </div>
    <a href="signup.php"><button class="signup btn-s">ثبت نام</button></a>
    <div class="liner"></div>
    <a href="login.php"><button class="signin btn-s">ورود</button></a>
    <div class="searchbar">
      <input type="text" id="box" placeholder="(: یه چیزی تایپ کن" class="search__box">
      <i class="fas fa-search search__icon" id="icon" onclick="toggleShow()"></i>
  </div>
  <i id="responsive-search" class="fas fa-search search__icon"></i>
  <a href="index.html" class="nav-link"><p class="link-name">صفحه اصلی</p><i class="fa fa-home icon-head" aria-hidden="true"></i></a>
    <div class="logo-div"><a href="#"><!--<img src="Helliproject/assets/Images/Logo.png">--></a></div>
</nav>
</header>
<section>
<div class="container">

<div>

<div class="ImgHome">
<!--<img src="Helliproject/assets/Images/web.png">-->
<div class="homeText">
  <span>!سلام به کیوکد خوش اومدی</span>
  </div>
  <a href="login.html"><button class="start-btn">شروع کنید</button></a>
</div>
</div>
</section>
<aside>

</aside>
<footer>
  <div class="footer">
    <p class="copyright"><i class="fa fa-copyright"></i>می باشد Qcode تمامی حقوق متعلق به</p>
    </div>
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="app.js"></script>
</body>
</html>