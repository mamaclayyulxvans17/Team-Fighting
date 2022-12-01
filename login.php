<?php
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) { 

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    
    if (empty($uname)){
        header("Location: index.php?error=Username is required");
        exit();
    } else if (empty($password)){
        header("Location: index.php?error=Password is required");
        exit();
    } else{
        $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows)

    }


}else{
    header("Location: index.php");
    exit();


}
