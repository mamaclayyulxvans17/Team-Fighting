<?php
session_start();
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['password']) 
    && isset($_POST['name']) && isset($_POST['re_password']) && isset($_POST['role'])) { 

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    $re_pass = validate($_POST['re_password']);
    $name = validate($_POST['name']);
    $role = validate($_POST['role']);
    $user_data = 'username='. $username. '&name='. $name;

    
    
    if (empty($username)){
        header("Location: signup.php?error=Username is required&$user_data");
        exit();
    } else if (empty($password)){
        header("Location: signup.php?error=Password is required&$user_data");
        exit();
    }
    else if(empty($re_pass)){
        header("Location: signup.php?error=Repeat your password is required&$user_data");
    }
    else if (empty($name)){
        header("Location: signup.php?error=Name is required&$user_data");
        exit();
    }
    
    else if ($password !== $re_pass){
        header("Location: signup.php?error=The confirmation password does not match&$user_data");
        exit();
    }
    
    else{

        //hashing the password 
        $password = md5($paswords);

        $sql = "SELECT * FROM users WHERE username='$username' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0 ) {
            header("Location: signup.php?error=The username is taken try another&$user_data");
        exit();
    }else {
        $sql2 = "INSERT INTO users(role, username, password, name) VALUES('$role', '$username', '$password', '$name')";
        $result2 = mysqli_query($conn, $sql2);
        if ($result2){
          header("Location: signup.php?success=Your Account has been created successfully");
          exit();
        }else{
            header("Location: signup.php?error=unknown error occur&$user_data");
            exit();
        }
    }
      
}    

}else{
    header("Location: signup.php");
    exit();
}
