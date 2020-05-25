
  
<!DOCTYPE html>
<html lang="vi">
<head>
<title>Fap-Fap The biggest laptop store</title>
    <link rel="stylesheet" href="css/style1.css" type="text/css">
    <link rel="stylesheet" href="css/header.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2fd94a014f.js" crossorigin="anonymous"></script>
    <script src="jquery-3.4.1.min.js" ></script>
</head>
<body>
    <?php
        include('controller/orders.php');
    ?>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    
   
    <?php
        include('quick_layout/header.php');
    ?>
    <!-- Header End -->

    <!-- Page Add Section Begin -->
    <section class="page-add cart-page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Đơn hàng<span>.</span></h2>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Cart Page Section Begin -->
    
    <div class="cart-page">
        <div class="container">
            <div class="cart-table">
                <table class = "table">
                    <thead>
                        <tr>
                            <th>Tên sản phẩm</th>
                            <th>Mã đơn hàng</th>
                            
                            <th>Ngày đặt</th>      
                            <th>Tình trạng</th>         
                        </tr>
                    </thead>
                    <tbody> 
                        <?php
                        while($order = mysqli_fetch_array($temp)){
                            $checkShip = false;
                            $datediff = mysqli_fetch_array(mysqli_query($con, "SELECT ROUND(DATEDIFF(NOW(), `orderDate`)) as Date FROM orders WHERE orderNumber = '{$order['orderNumber']}'"));
                            
                            if($datediff['Date'] >= 4) $checkShip = true;
                            
                            if($checkShip){
                                // thay doi status
                                $status = mysqli_query($con, "UPDATE `orders` SET status = '1' WHERE orderNumber = '{$order['orderNumber']}' ");
                            } 
                            $status = "";
                            if($order['status'] == '0') $status = "Đang giao";
                            if($order['status'] == '1') $status = "Đã giao";
                            $result = "";
                            
                            $idofLaptops = mysqli_query($con, "SELECT LaptopCode FROM `orderdetails` WHERE orderNumber =  '{$order['orderNumber']}'");
                            
                            while($idofLaptop = mysqli_fetch_array($idofLaptops)){
                                $nameofLaptop = mysqli_fetch_array(mysqli_query($con, "SELECT LaptopName FROM laptop WHERE LaptopCode = {$idofLaptop['LaptopCode']}"));
                                $result.= "<td class=\"product-col\">
                                <div class=\"p-title\">
                                    <h5>" . $nameofLaptop['LaptopName'] ."</h5>
                                </div>
                                </td>" . "\n";
                            }
                            echo"
                                <tr>
                                " . $result .
                                "<td class=\"price-col\"><a style=\"color: #999\" href=\"orderdetails.php?orderNumber={$order['orderNumber']}\">{$order['orderNumber']}</a></td>
                                
                                <td class=\"total\">{$order['orderDate']}</td>
                                <td class=\"product-close\">{$status}</td>
                                </tr>  
                                ";   
                        }   
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</body>

</html>
