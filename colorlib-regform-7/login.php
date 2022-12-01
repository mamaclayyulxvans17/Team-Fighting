<?php

if (isset($_POST['your_uname']) && isset($_POST['password'])) { 
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }

    $your_uname = validate($_POST['your_uname']);
    $password = validate($_POST['password']);
    
    if (empty($your_uname)) {
        header("Location: index.php?error=Username is required");
        exit();
    } else if (empty($password)) {
        header("Location: index.php?error=Password is required");
        exit();
    } else {
        echo "Valid input";
    }




} else {
    header("Location: index.php");
    exit();


}
