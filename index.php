<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">
<!-- Sing in  Form -->
<section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                <a href="signup.php" class="signup-image-link">Create an account</a>
            </div>

            <div class="signin-form">
            <form action="php/check-login.php" 
                        method="POST">
                <h2 class="form-title">LOGIN</h2>
                <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <div class="form-group">
                        <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" 
                               name="username" 
                               id="username" 
                               placeholder="Your Username" 
                               autocomplete="off" />
                    </div>
                    <div class="form-group">
                        <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" 
                               name="password" 
                               id="password" 
                               placeholder="Password" />
                    </div>
                    <div class="form-group">
                    <center><label for="usertype">Select User Type:</label>
                            <select class="form-select"
                                    name="role"
                                    aria-label="Default select example">
                            <option selected value="user">USER</option>
                            <option value="admin">ADMIN</option>
                    </select>
                    </center>
                    </div>
                    <!-- <div class="form-group">
                        <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                        <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                    </div> -->
                    <CENTER><div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                    </div></CENTER>
                </form>
                <div class="social-login">
                    <span class="social-label">Or login with</span>
                    <ul class="socials">
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                        <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

</div>

</body>
</html>
<?php }else{
	header("Location: home.php");
} ?>
