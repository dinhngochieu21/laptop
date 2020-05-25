<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
    
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
    ?>
    
    
    
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
                        <h2>Giỏ hàng<span>.</span></h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="../../../img/add1.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Cart Page Section Begin -->
    <div class="cart-page">
        <div class="container">
            <div class="cart-table">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="product-h">Sản phẩm</th>
                            <th>Giá</th>
                            <th class="quan">Số lượng</th>
                            <th>Tổng</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($cart = mysqli_fetch_array($carts)){
                                $product = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM laptop WHERE LaptopCode = '{$cart['LaptopCode']}'"));
                                echo"
                                    <tr>
                                        <td class=\"product-col\">
                                            <img src=\"image/{$product['ImageCode']}\" alt=\"\" class=\"img-fluid\">
                                            <div class=\"p-title\">
                                                <h5>{$product['LaptopName']}</h5>
                                            </div>
                                        </td>
                                        <td class=\"price-col\">{$product['Price']}</td>
                                        <td class=\"quantity-col\">
                                            <div class=\"product-quantity ml-5\">
                                                <h5>{$cart['quantity']}</h5>
                                            </div>
                                        </td>
                                        <td class=\"total\">{$cart['TotalPayment']} Đ</td>
                                        <td class=\"product-close\"><a href=\"controller/shopping-cart.php?delete={$cart['id']}\" class=\"text-body\"><i class=\"fa fa-trash-o\"></i></a></td>
                                    </tr>
                                ";
                            }
                        ?> 
                    </tbody>
                </table>
            </div>
            <div class="cart-btn">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 text-left text-lg-right">
                        <div class="site-btn clear-btn"><a href="controller/shopping-cart.php?deleteAll=true" class="text-body">Xóa toàn bộ</div>
                        <div class="site-btn update-btn"><a href="categories.php" class="text-body">Thêm sản phẩm mới</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shopping-method">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        
                        <div class="total-info">
                            <div class="total-table">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Tổng hàng</th>
                                            <!-- <th>Subtotal</th> -->
                                            <th>Phí giao hàng</th>
                                            <th class="total-cart">Tổng cộng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="total"><?php if($totalPayment!= "")echo "{$totalPayment} Đ"; else echo "0 Đ";?></td>
                                            <td class="shipping"><?php echo "{$_SESSION['fee']} Đ";?></td>
                                            <td class="total-cart-p"><?php echo "{$totalSum} Đ" ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-right">
                                    <a href="checkout.php" class="btn btn-primary btn-dark">Tiến hành thanh toán</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Page Section End -->
    <?php 
        include("quick_layout/footer.php");
    ?>
    
</body>

</html>