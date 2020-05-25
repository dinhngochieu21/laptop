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
        include('controller/shopping-cart.php');
        include('controller/checkout.php');
    ?>
    >

   
    <?php
        include('quick_layout/header.php');
    ?>
    <!-- Header End -->

    <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Thanh toán<span>.</span></h2>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Cart Total Page Begin -->
    <section class="cart-total-page spad">
        <div class="container">
            <form action="#" class="checkout-form" method="POST">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Thông tin của bạn</h3>
                    </div>
                    <div class="col-lg-9">
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name" >Họ và tên*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Số nhà*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="apartmentNumber" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name" >Xã/Phường*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="ward" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Quận/Huyện*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="district" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Tỉnh/TP*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="province" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="in-name">Số điện thoại*</p>
                            </div>
                            <div class="col-lg-10">
                                <input type="text" name="phoneNumber" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="order-table">
                            <div class="cart-item">
                                <span>Sản phẩm</span>
                                <?php
                                    while($cart = mysqli_fetch_array($carts)){
                                        $product = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM laptop WHERE LaptopCode = '{$cart['LaptopCode']}'"));
                                        echo"<p class=\"product-name\">{$product['LaptopName']}</p>";
                                    }
                                ?>
                                
                            </div>
                            <div class="cart-item">
                                <span>Tổng đơn hàng</span>
                                <p><?php if($totalPayment!= "")echo "{$totalPayment} Đ"; else echo "0 Đ";?></p>
                            </div>
                            <div class="cart-item">
                                <span>Số lượng</span>
                                <p><?php echo "{$totalQuantity} cái" ?></p>
                            </div>
                            <div class="cart-item">
                                <span>Phí vận chuyển</span>
                                <p><?php echo "{$_SESSION['fee']} Đ";?></p>
                            </div>

                            <div class="cart-total">
                                <span>Tổng</span>
                                <p><?php echo "{$totalSum} Đ" ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                               
                        <button type="submit" name="order" class="btn btn-success btn-lg">Đặt hàng</button>
                        
                    </div>
                </div>
            </form>
        </div>
    </section>
   
</body>

</html>