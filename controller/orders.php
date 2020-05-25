<?php
    session_start();
    include('connect.php');
    $temp = mysqli_query($con, "SELECT * FROM orders WHERE userID = '1'");
    
?> 