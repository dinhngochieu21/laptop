<?php 
    include('../../controller/connect.php');
    if(isset($_GET['LaptopCode'])){
        $delId = $_GET['LaptopCode'];
        $del = mysqli_query($con, "DELETE FROM laptop WHERE LaptopCode = {$delId}");
        echo "delete";
        header("Location: ../admin.php");
    }
?>