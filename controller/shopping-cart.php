<?php
    session_start();
   include('connect.php');
    if(isset($_GET['laptopid'])){
        $laptopID = $_GET['laptopid'];
        $userId = $_SESSION['id'];
        $amount = $_SESSION['amount'];
        $result = mysqli_query($con, "SELECT * FROM laptop WHERE LaptopCode = '$laptopID'");
        $laptop = mysqli_fetch_array($result);
        $total = (int)$laptop['Price']*(int)$amount;
        if($_SESSION['buy']){
            $check = mysqli_query($con, "SELECT * FROM cart WHERE LaptopCode = '$laptopID' and userID = '$userId'");
            $laptop_check = mysqli_fetch_array($check);
            $num_check = mysqli_num_rows($check);
            if($num_check > 0){
                $amount+=$laptop_check['quantity'];
                $total+=$laptop_check['TotalPayment'];
                $putIntoCart = mysqli_query($con, "INSERT INTO cart(`userID`, `LaptopCode`, `quantity`, `totalPayment`) VALUE ('{$userId}', '{$laptopID}', '{$amount}', '{$total}')");
                $delBookInCart = mysqli_query($con, "DELETE FROM cart WHERE id = {$laptop_check['id']}");
            }else
                $putIntoCart = mysqli_query($con, "INSERT INTO cart(`userID`, `LaptopCode`, `quantity`, `totalPayment`) VALUE ('{$userId}', '{$laptopID}', '{$amount}', '{$total}')");
            $_SESSION['buy'] = false;
        }
    }
    if(isset($_GET['delete'])){
        $delId = $_GET['delete'];
        $del = mysqli_query($con, "DELETE FROM cart WHERE id = {$delId}");
        echo "delete";
        header("Location: ../shopping_cart.php");
    }
    if(isset($_GET['deleteAll'])){
        $userID = $_SESSION["id"];
        $del = mysqli_query($con, "DELETE FROM cart WHERE userId = '{$userID}'");
        header("Location: ../shopping-cart.php");
    }
    if(isset($_GET['methodShip'])){
        $_SESSION['methodShip'] = $_GET['methodShip'];
        if($_SESSION['methodShip'] == "standard"){
            $_SESSION['fee'] = 15000;
        }
        if($_SESSION['methodShip'] == "fast"){
            $_SESSION['fee'] = 25000;
        }
        if($_SESSION['methodShip'] == "express"){
            $_SESSION['fee'] = 40000;
        }
        header("Location: ../shopping-cart.php");
    }
    $carts = mysqli_query($con, "SELECT * FROM cart WHERE userID = '{$_SESSION["id"]}' ORDER BY id DESC"); 
    $sum = mysqli_query($con, "SELECT SUM(`totalPayment`) as `totalPayment`, SUM(`quantity`) as `sumQuantity` FROM cart WHERE userID = '{$_SESSION["id"]}'");
    $total = mysqli_fetch_array($sum);
    $totalPayment = $total['totalPayment'];
    $totalQuantity = $total['sumQuantity'];
    $totalSum = $_SESSION['fee'] + $totalPayment;
?>