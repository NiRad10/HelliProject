<!DOCTYPE html>
<html lang="fa">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width", initial-scale="1.0">
<title>ورود | Login</title>
<link rel="shortcut icon" href="#" type="image/x-icon">
<link rel="stylesheet" href="styles.sign.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="content">
    <?php
    require('db.php');
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query    = "SELECT * FROM users WHERE username='$username' and password='" . md5($password) . "' ";
        $result = mysqli_query($con, $query);
        $rows = mysqli_num_rows($result);
        if ($rows = 1) {
          session_start();
            $_SESSION['username'] = $username;
            header("Location: index.php");
        } else {
            echo "
                  <h3>! نام کاربری یا رمز عبور نادرست است</h3><br/>
                  <p class='link'> دوباره<a href='login.php'> وارد شوید </a></p>";
        }
    } else {
      ?>
             <form action="" method="post" name="login">
               <!--Email & password input place-->
       
              <!--login & outer button-->
             <div class="text">Qcode</div>
             <div class="field">
                <span class="fa fa-user"></span>
                <input type="text" name="username" required placeholder="نام کاربری">
              </div>
              <div class="field">
                <span class="fa fa-lock"></span>
                <input type="password" name="password" required placeholder="رمز عبور">
              </div>
              <button type="submit">ورود</button>
            </form>
            <?php
        }?>
         <p class="forgot"><a href="#" class="forgotten">رمز عبور خود را فراموش کرده اید؟</a></p>
         <div class="signup-link"><p class="forgot">حساب کاربری ندارید؟</p><a href="signup.php" class="forgotten">ثبت نام کنید</a></div>
         </div>
</body>
</html>