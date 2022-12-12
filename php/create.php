<?php
    
    if (isset($_POST['create'])) {
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

       $user_data = 'billername='.$billername. 'amount='.$amount. 'billtype='.$billtype. 'duedate='.$duedate. '&remarks='.$remarks;

        if (empty($billername)) {
            header ("Location: ../index1.php?error=Biller name is required&$user_data");
        }else if (empty($amount)) {
            header ("Location: ../index1.php?error=Amount is required&$user_data");
        }else if (empty($duedate)) {
            header ("Location: ../index1.php?error=Due date is required&$user_data");
        } else {
            $sql2 = "INSERT INTO billers(billername, amount, billtype, duedate, remarks) 
                    VALUES ('$billername', '$amount', '$billtype', '$duedate', '$remarks')";
            
            $result = mysqli_query($conn, $sql2);
            if ($result) {
                header("Location: ../read.php?success=successfully added");
            }else {
                header("Location: ../index1.php?error=unknown error occurred&$user_data");

            }
        }
    }
