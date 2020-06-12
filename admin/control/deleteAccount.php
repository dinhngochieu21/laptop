<?php 
    include('../../controller/connect.php');
    if(isset($_GET['id'])){
        $delId = $_GET['id'];
        $del = mysqli_query($con, "DELETE FROM user WHERE id = {$delId}");
        echo "delete";
        header("Location: ../account.php");
    }
?>