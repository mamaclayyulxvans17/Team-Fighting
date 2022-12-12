<?php

if(isset($_GET['id'])){
    include "../db_conn.php";
    function validate($data){
        $data= trim($data);
        $data= stripslashes($data);
        $data= htmlspecialchars($data);
        return $data;
        }
    

    $id = validate($_GET['id']);

    $sql2 = "DELETE FROM billers
            WHERE id=$id";
    $result = mysqli_query($conn, $sql2);
    if ($result) {
        header("Location: ../read.php?success=Successfully deleted");
    }else {
        header("Location: ../read.php?error=unknown error occurred&$user_data");

    } 


}else {
    header("Location: ../read.php");
}