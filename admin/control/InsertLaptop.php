<?php
require('../../controller/connect.php');

if ($_SERVER['REQUEST_METHOD'] != 'POST')
    die('Invalid HTTP method!');
// else
//  print_r($_POST);

$LaptopName = $_POST['LaptopName'];
$LaptopCompany = $_POST['LaptopCompany'];
$Price = $_POST['Price'];
$LaptopInfo = $_POST['LaptopInfomation'];
$Image = $_POST['Image'];
 $sql = "INSERT INTO laptop(LaptopName, LaptopCompany,ImageCode, Price,LaptopInfomation) VALUES('$LaptopName' ,'$LaptopCompany' ,'$Image','$Price','$LaptopInfo' )";

// //die($sql);

mysqli_query($con, $sql);

$adminURL = '../admin.php';
header('Location: '.$adminURL);
?>