<?php
    session_start();
    include('connect.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($con, "SELECT * FROM laptop WHERE LaptopCode = $id ");
        $row = mysqli_fetch_array($result);
        //$total_product = mysqli_num_rows(mysqli_query($con, "SELECT * FROM books"));
        
    }

    if(isset($_POST['addCart'])){
        $_SESSION['amount'] = $_POST['amount'];
        $_SESSION['buy'] = true;
        if(isset($_SESSION['id'])) {
            header("Location: shopping_cart.php?laptopid=$id");       
        }
        else header("Location: sign-in.php");
       
    }

?>