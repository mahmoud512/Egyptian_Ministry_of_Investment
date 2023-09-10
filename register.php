<?php
include('inc/fun/conn.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
  $name = $_POST['name'];
  $country = $_POST['country'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $pass2 = $_POST['pass2'];
  $phone = $_POST['phone'];
  $passport = $_POST['passport'];
  $pass_md5 = md5($pass);
  if ($pass === $pass2) {
    $sql = "INSERT INTO user( name, country_residence, email, pass, phone, passport_number) VALUES
    ('$name','$country','$email','$pass_md5','$phone','$passport')";
    $con->query($sql);
    header('location:login.php');
  }else{
    $error = 1;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/stylee.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>register</title>
</head>
<body>
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <!-------Image-------->
                    <!-- <img src="assets/images/project/project-one-7.jpg" alt=""> -->
                  
                </div>
                <div class="col-md-6 right">
                     <div class="input-box">
                        <header>Register</header>
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                          <div class="input-field">
                              <input type="text" name="name" class="input" id="name" required autocomplete="off">
                              <label for="name">full name</label>
                          </div>
                          <div class="input-field">
                              <input type="text" name="country" class="input" id="country" required autocomplete="off">
                              <label for="country">country of residence</label>
                          </div>
                          <div class="input-field">
                              <input type="email" name="email" class="input" id="email" required autocomplete="off">
                              <label for="email">Email</label>
                          </div>
                          <div class="input-field">
                              <input type="password" name="pass" class="input" id="password" required>
                              <label for="password">Password</label>
                          </div>
                          <div class="input-field">
                              <input type="password" name="pass2" class="input" id="rewrite password" required>
                              <label for="rewrite password">rewrite Password</label>
                          </div>
                          
                          <?php if (isset($error)) {
                            echo '<p class="text-danger">the password is not identical</p>';
                          } ?>
                          <div class="input-field">
                              <input type="text" name="phone" class="input" id="phone" required>
                              <label for="phone">phone</label>
                          </div>
                          <div class="input-field">
                              <input type="text" name="passport" class="input" id="passport" required>
                              <label for="passport">passport number</label>
                          </div>
                          <div class="input-field">
                              <input type="submit" class="submit" value="Register">
                            </div>
                        </form>
                            
                        <div class="signin">
                            <span>Already have an account? <a href="login.php">login</a></span>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>