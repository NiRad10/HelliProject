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
<link rel="stylesheet" href="profile.css">
</head>
<body>
<header>
<div class="head-gradient"></div>
<nav id="" class="navbar">
    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">|||</button>
        <div id="myDropdown" class="dropdown-content">
        <ul class="menu-links">
          <a href="#"><i class="fa fa-home" aria-hidden="true"><p>خانه</p></i></a>
          <a href="#"><i class="fa fa-home" aria-hidden="true"><p>خانه</p></i></a>
          <a href="#"><i class="fa fa-home" aria-hidden="true"><p>خانه</p></i></a>
        </ul>
      </div>
    </div>
    <button class="signup btn-s">ثبت نام</button>
    <div class="liner"></div>
    <button class="signin btn-s">ورود</button>
    <div class="searchbar">
      <input type="text" id="box" placeholder="(: یه چیزی تایپ کن" class="search__box">
      <i class="fas fa-search search__icon" id="icon" onclick="toggleShow()"></i>
  </div>
  <i id="responsive-search" class="fas fa-search search__icon"></i>
  <a href="#" class="nav-link"><p class="link-name">صفحه اصلی</p><i class="fa fa-home icon-head" aria-hidden="true"></i></a>
    <div class="logo-div"><a href="#"><img src="/assets/Images/Logo.png"></a></div>
</nav>
</header>
<section>
<div class="container">

    <div class="wrapper">
      <div class="profile-header-color"></div>
        <div class="profile-card js-profile-card">
          <div class="profile-card__img">
            <img src="HelliProject/assets/Images/Profile.jpg">
          </div>
      
          <div class="profile-card__cnt js-profile-cnt">
            <div class="profile-card__name">NiRad</div>
            <div class="profile-card__txt">description<strong></div></strong></div>
            <!--<div class="profile-card__txt"><strong></strong></div>
             <div class="profile-card__txt"><strong></strong></div>-->
            <div class="profile-card-loc">
              <span class="profile-card-loc__txt"></span>
            </div>
      
            <div class="profile-card-inf">
              <div class="profile-card-inf__item">
                <div class="profile-card-inf__title">10K</div>
                <div class="profile-card-inf__txt">دنبال کننده ها</div>
              </div>
      
              <div class="profile-card-inf__item">
                <div class="profile-card-inf__title">500</div>
                <div class="profile-card-inf__txt">دنبال می کند</div>
              </div>
      
              <div class="profile-card-inf__item">
                <div class="profile-card-inf__title">50</div>
                <div class="profile-card-inf__txt">مقالات</div>
              </div>
      
              <div class="profile-card-inf__item">
                <div class="profile-card-inf__title">5</div>
                <div class="profile-card-inf__txt">سوالات</div>
              </div>
            </div>
      
            <div class="profile-card-social">
              <a href="#" class="profile-card-social__item facebook" target="_blank">
                    <i class="fa fa-facebook icon"></i>
              </a>
      
              <a href="#" class="profile-card-social__item twitter" target="_blank">
                <span class="icon-font">
                    <i class="fab fa-twitter icon"></i>
                </span>
              </a>
      
              <a href="#" class="profile-card-social__item instagram" target="_blank">
                <span class="icon-font">
                  <i class="fab fa-instagram icon"></i>
                </span>
              </a>        
      
              <a href="#" class="profile-card-social__item github" target="_blank">
                <span class="icon-font">
                  <i class="fab fa-github icon"></i>
                </span>
              </a>
              <button class="profile-card__button button--orange">دنبال کردن</button>
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