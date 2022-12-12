<?php

if (isset($_GET['id'])){
    include "db_conn.php";

    function validate($data){
        $data= trim($data);
        $data= stripslashes($data);
        $data= htmlspecialchars($data);
        return $data;
        }
    

    $id = validate($_GET['id']);

    $sql = "SELECT * FROM billers WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }else {
        header("Location: read.php");
    }

}else if(isset($_POST['update'])){
    include "../db_conn.php";
    function validate($data){
        $data= trim($data);
        $data= stripslashes($data);
        $data= htmlspecialchars($data);
        return $data;
        }
    

    $billername = validate($_POST['billername']);
    $amount = validate($_POST['amount']);
    $billtype = validate($_POST['billtype']);
    $duedate = validate($_POST['duedate']);
    $remarks = validate($_POST['remarks']);
    $id = validate($_POST['id']);


    if (empty($billername)) {
        header ("Location: ../update.php?id=$id&error=Biller name is required");
    }else if (empty($amount)) {
        header ("Location: ../update.php?id=$id&error=Amount is required");
    }else if (empty($duedate)) {
        header ("Location: ../update.php?id=$id&error=Due date is required");
    } else {

        $sql2 = "UPDATE billers
                 SET billername='$billername', amount='$amount', billtype='$billtype', duedate='$duedate', remarks='$remarks'
                 WHERE id=$id";
        
        $result = mysqli_query($conn, $sql2);
        if ($result) {
            header("Location: ../read.php?success=successfully updated");
        }else {
            header("Location: ../update.php?id=$id&error=unknown error occurred&$user_data");

        }
    }
}else {
    header("Location: read.php");
}