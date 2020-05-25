<?php
    function orderIdRand(){
        $rand = rand(0,999);
        $today = date("Ymd");
        $unique = "ORD".$today."_".$rand;
        return $unique;
    }
    include('connect.php');
    //kiem tra xem nếu đặt hàng
    if(isset($_POST['order'])){
        // khởi tạo mã đơn hàng
        $orderId = orderIdRand();
        // lấy gtri tên ng` đặt trong form
        $name = $_POST['name'];
        // lấy gtri địa chỉ trong form
        $address = $_POST['apartmentNumber']." - ".$_POST['ward']." - ".$_POST['district']." - ".$_POST['province'];
        // lấy gtri sdt trong form
        $phone = $_POST['phoneNumber'];      
        if($phone == "") die("loi");
        // thêm các thông tin vào bảng 
        $tmp = mysqli_query($con,"INSERT INTO orders(`orderNumber`,  `orderDate`, `status`,`userID`, `customerName`, `customerAddress`, `customerPhone`) VALUES ('{$orderId}',  NOW(), '0', '{$_SESSION['id']}', '{$name}', '{$address}', '{$phone}')");
        // lấy ra các đơn hàng trong giỏ chuyển sang order details
        $cart = mysqli_query($con,"SELECT * FROM cart WHERE userID = '{$_SESSION['id']}'");
        
        while($product = mysqli_fetch_array($cart)){
            $temp = mysqli_query($con,"INSERT INTO orderdetails(`orderNumber`, `LaptopCode`, `quantityOrdered`, `totalPayment`) VALUES ('{$orderId}', '{$product['LaptopCode']}', '{$product['quantity']}', '{$product['TotalPayment']}')");
        }
        // xoa sp trong gio hang sau khi dat hang
        $del = mysqli_query($con, "DELETE FROM cart WHERE userID = '{$_SESSION['id']}'");
        // chuyen trang sang orders.php
        header("Location: orders.php");
    }
    
?> 