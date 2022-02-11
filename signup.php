<!DOCTYPE html>
<html lang="fa">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width", initial-scale="1.0">
<title>ثبت نام | signup</title>
<link rel="shortcut icon" href="#" type="image/x-icon">
<link rel="stylesheet" href="styles.sign.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="content">
    <?php
    require('db.php');
    session_start();
    if (isset($_REQUEST['username'])) {
      $username = stripslashes($_REQUEST['username']);
      $email    = stripslashes($_REQUEST['email']);
      $check=mysqli_query($con,"SELECT * from users WHERE username='$username' and email='$email'");
      $checkrows=mysqli_num_rows($check);
      if($checkrows > 0) {
        echo "! کاربری با مشخصات شما در سیستم ثبت شده است. لطفا دوباره تلاش کنید
        <p class='link'><a href='signup.php'>تلاش مجدد</a></p><br>
        <p class='forgot'>قبلا ثبت نام کرده اید؟</p><a href='/Helliproject/login.php' class='forgotten'>!وارد شوید</a>";
        die();
       } else { 
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($con, $name);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, name, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$name', '$email', '$create_datetime')";

        $result   = mysqli_query($con, $query);
       } if ($result) {
          $remove = '<p class="forgot">قبلا ثبت نام کرده اید؟</p><a href="/login.php" class="forgotten">!وارد شوید</a>';
          preg_replace('#<p class="forgot">(.*?)</p>#', '', $remove);
            echo "
                  <h3>!ثبت نام با موفقیت انجام شد</h3><br/>
                  <p class='link'><a href='login.php'>وارد شوید</a></p>";
        } else {
          $remove = '<p class="forgot">قبلا ثبت نام کرده اید؟</p><a href="Helliproject/login.php" class="forgotten">!وارد شوید</a>
          </div>';
          preg_replace('#<p class="forgot">(.*?)</p>#', '', $remove);
            echo "<div class='form'>
                  <h3>فرم ناقص است</h3><br/>
                  <p class='link'>دوباره<a href='signup.php'>تلاش</a> کنید.</p>";
        }
    } else {
      ?>
             <form action="" method="POST">
               <!--Email & password input place-->
       
              <!--login & outer button-->
             <div class="text">Qcode</div>
             <div class="field">
                <span class="fa fa-pencil-square-o"></span>
                <input type="text" class="name" name="name" required placeholder="نام و نام خانوادگی">
              </div>
              <div class="field">
                <span class="fa fa-envelope"></span>
                <input type="email" name="email" class="number" required placeholder="ایمیل">
              </div>
             <div class="field">
                <span class="fa fa-user"></span>
                <input type="text" name="username" required placeholder="نام کاربری">
              </div>
              <div class="field">
                <span class="fa fa-lock"></span>
                <input type="password" name="password" required placeholder="رمز عبور">
              </div>
              <button type="submit" name="submit" value="Register">ثبت نام</button>
            </form>
            <p class="forgot">قبلا ثبت نام کرده اید؟</p><a href="login.php" class="forgotten">!وارد شوید</a>
            </div>
            <?php
            }
            ?>
</body>
</html>

