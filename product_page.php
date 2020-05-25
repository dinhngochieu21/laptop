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
        
        include('controller/product_page.php');
    ?>
    

    <?php
        include('quick_layout/header.php');
    ?>
    
    <!-- <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Sản phẩm<span>.</span></h2>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="../../../img/add1.jpg" alt="">
                </div>
            </div>
        </div>
    </section> -->
    <!-- Page Add Section End -->

    <!-- Product Page Section Beign -->
    <section class="product-page">
        <div class="container">
        <br>
                            <br>
            <div class="row">
                <?php
                    echo"<div class=\"col-lg-6\">
                            
                        <div class=\"product-img\">
                            <figure>
                                <img src=\"image/{$row['ImageCode']}\" alt=\"\" class=\"img-fluid\">
                                
                            </figure>
                        </div>
                            
                    
                        </div>
                        <div class=\"col-lg-6\">
                            <div class=\"product-content\">
                                <h2>{$row['LaptopName']}</h2>
                                <div class=\"pc-meta\">
                                    <h5>{$row['Price']} Đ</h5>
                                
                            </div>
                            <p>{$row['LaptopInfomation']}</p>
                            
                                <span>Laptop Company :</span>{$row['LaptopCompany']}
                                
                            
                            
                            <form action=\"\" method=\"POST\" class=\"contact-form\">
                            <br>
                                <div class=\"row\">
                                    <div class=\"product-quantity\">
                                        <div class=\"pro-qty\">
                                            <input type=\"text\" name=\"amount\" value=\"1\" class=\"form-control\">
                                        </div>
                                    </div>
                                    <div class=\"col-lg-6\">
                                        <button type=\"submit\" name=\"addCart\" class=\"btn btn-success\">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </form>
                        </div>";
                ?>
           
            </div>
        </div>
    </section>
    <!-- Product Page Section End -->


    <!-- Footer Section Begin -->
   
</body>

</html>
