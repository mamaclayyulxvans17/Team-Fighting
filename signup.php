<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                    <form action="signup-check.php" method="POST">
                        <h2 class="form-title">Sign up</h2>
                        <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                         <?php } ?>

                         <?php if (isset($_GET['success'])) { ?>
                        <p class="success" 
                            background="#D4EDDA"
                            color=" #40754C"
                            padding= "10px"
                            width= "95%"
                            border-radius="5px"
                            margin="20px auto"><?php echo $_GET['success']; ?></p>
                        <?php } ?>
                        
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <?php if (isset($_GET['name'])) { ?>
                                <input type="text" 
                                        name="name"  
                                        placeholder="Your Name"
                                        value="<?php echo $_GET['name']; ?>"/>
                                <?php }else{ ?>
                                <input type="text"
                                        name="name"
                                        placeholder="Name"
                                        autocomplete="off"/>
                                <?php } ?>
                            </div>

                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <?php if (isset($_GET['username'])) { ?>
                                <input type="text" 
                                        name="username"  
                                        placeholder="Your Username"
                                        value="<?php echo $_GET['username']; ?>"/>
                                <?php }else{ ?>
                                <input type="text"
                                        name="username"
                                        placeholder="Your username"/>
                                <?php } ?>
                            </div>

                        
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re password"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_password" id="re_pass" placeholder="Repeat your password"/>
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
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div> -->
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="index.php" class="signup-image-link">Already have an account</a>
                    </div>
                </div>
            </div>
        </section>

       

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>