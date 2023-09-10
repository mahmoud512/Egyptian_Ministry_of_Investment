<?php
session_start();
include('inc/fun/conn.php');

if ($_SERVER['REQUEST_METHOD'] == "POST"){
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $pass_md5 = md5($pass);
  $sql = "SELECT * FROM user WHERE email = '$email' and pass = '$pass_md5'";
  $result = $con->query($sql);
  $num_result = $result->num_rows;
  if($num_result > 0){
    $rows = $result->fetch_assoc();
    $_SESSION['logn_user'] = 'users';
    $_SESSION['name_user'] = $rows['name'];
    $_SESSION['id_user'] = $rows['id'];
    if (isset($_GET['do'])) {
      header('location:foras_add.php');
    }else{
      header('location:index.php');
    }
  }else{
    $error = 0;
  }
  }
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/logn.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Login</title>
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
                      <?php if (isset($error)) {
                        echo '<p class="alert alert-danger">the password or email is not found</p>';
                      } ?>
                        <header>login</header>
                        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                          <div class="input-field">
                              <input type="text" name="email" class="input" id="email" required autocomplete="off">
                              <label for="email">Email</label>
                          </div>
                          <div class="input-field">
                              <input type="password" name="pass" class="input" id="password" required>
                              <label for="password">Password</label>
                          </div>
                          <div class="input-field">
                              <input type="submit" class="submit" value="login">
                          </div>
                      </form>
                        <div class="signin">
                            <span>Already have an account? <a href="register.php">register</a></span>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>