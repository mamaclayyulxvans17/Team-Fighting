<?php

include "db_conn.php";

$sql = "SELECT * FROM billers ORDER BY duedate ASC";
$result = mysqli_query($conn, $sql);
