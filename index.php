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
    <?php session_start(); 
        include('controller/connect.php');
        $sql = mysqli_query($con,"SELECT * FROM laptop WHERE 1");
      
    ?>
    <div class="content">
        <?php include('quick_layout/header.php'); ?>

        <div class="x">
            <div class="quick-news">
                <div class="big-news">
                    <img src="image/AcerSlider.jpg" alt="">
                </div>
                <div class="small-news">
                    <img src="image/smallimg.jpg" alt="">
                    <img src="image/smallimg.jpg" alt="">
                </div>
            </div>
            
            <div class="hot-pick-news">
                <div class="y"><a href="" id="sp-ban-chay">SẢN PHẨM BÁN CHẠY</a>
                    <a href="" id="sp-moi">SẢN PHẨM MỚI</a>
                    <a href="" class="tintuc">
                        <i class="fas fa-bars"></i>
                        TIN TỨC
                    </a>
                <br></div>
                <div class="product row">
                    
                <?php 
                        $sp = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                        echo "<div class=\"col-lg-4\">
                        <a href=\"product_page.php?id={$sp['LaptopCode']}\">
                            <figure>
                                <img src=\"image/{$sp['ImageCode']}\" alt=\"\" class=\"img-fluid\">
                                <h5>{$sp['LaptopName']}</h5>
                            </figure>
                            {$sp['Price']}<br>
                            <button class=\"btn btn-success\" >MUA HÀNG ONLINE</button>
                        </a> 
                        
                    </div>"
                    ?>
                    
                    <?php 
                        $sp = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                        echo "<div class=\"col-lg-4\">
                        <a href=\"product_page.php?id={$sp['LaptopCode']}\">
                            <figure>
                                <img src=\"image/{$sp['ImageCode']}\" alt=\"\" class=\"img-fluid\">
                                <h5>{$sp['LaptopName']}</h5>
                            </figure>
                            {$sp['Price']}<br>
                            <button class=\"btn btn-success\" >MUA HÀNG ONLINE</button>
                        </a> 
                        
                    </div>"
                    ?>

                    <?php 
                        $sp = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                        echo "<div class=\"col-lg-4\">
                        <a href=\"product_page.php?id={$sp['LaptopCode']}\">
                            <figure>
                                <img src=\"image/{$sp['ImageCode']}\" alt=\"\" class=\"img-fluid\">
                                <h5>{$sp['LaptopName']}</h5>
                            </figure>
                            {$sp['Price']}<br>
                            <button class=\"btn btn-success\" >MUA HÀNG ONLINE</button>
                        </a> 
                        
                    </div>"
                    ?>
                    <?php 
                        $sp = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                        echo "<div class=\"col-lg-4\">
                        <a href=\"product_page.php?id={$sp['LaptopCode']}\">
                            <figure>
                                <img src=\"image/{$sp['ImageCode']}\" alt=\"\" class=\"img-fluid\">
                                <h5>{$sp['LaptopName']}</h5>
                            </figure>
                            {$sp['Price']}<br>
                            <button class=\"btn btn-success\" >MUA HÀNG ONLINE</button>
                        </a> 
                        
                    </div>"
                    ?>

                    <?php 
                        $sp = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                        echo "<div class=\"col-lg-4\">
                        <a href=\"product_page.php?id={$sp['LaptopCode']}\">
                            <figure>
                                <img src=\"image/{$sp['ImageCode']}\" alt=\"\" class=\"img-fluid\">
                                <h5>{$sp['LaptopName']}</h5>
                            </figure>
                            {$sp['Price']}<br>
                            <button class=\"btn btn-success\" >MUA HÀNG ONLINE</button>
                        </a> 
                        
                    </div>"
                    ?>
                    <?php 
                        $sp = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                        echo "<div class=\"col-lg-4\">
                        <a href=\"product_page.php?id={$sp['LaptopCode']}\">
                            <figure>
                                <img src=\"image/{$sp['ImageCode']}\" alt=\"\" class=\"img-fluid\">
                                <h5>{$sp['LaptopName']}</h5>
                            </figure>
                            {$sp['Price']}<br>
                            <button class=\"btn btn-success\" >MUA HÀNG ONLINE</button>
                        </a> 
                        
                    </div>"
                    ?>
                    
                </div>
                
                
                <div class="news">
                    <img src="image/ip6.jpg" alt="" class="img-fluid">
                </div>
            </div>
    
            <div class="laptop">
                <div></div>
                <div class="ok row">
                
                <?php 
                        $sp = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                        echo "<div class=\"col-lg-4\">
                        <a href=\"product_page.php?id={$sp['LaptopCode']}\">
                            <figure>
                                <img src=\"image/{$sp['ImageCode']}\" alt=\"\" class=\"img-fluid\">
                                <h5>{$sp['LaptopName']}</h5>
                            </figure>
                            {$sp['Price']}<br>
                            <button class=\"btn btn-success\" >MUA HÀNG ONLINE</button>
                        </a> 
                        
                    </div>"
                    ?>
                     <?php 
                        $sp = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                        echo "<div class=\"col-lg-4\">
                        <a href=\"product_page.php?id={$sp['LaptopCode']}\">
                            <figure>
                                <img src=\"image/{$sp['ImageCode']}\" alt=\"\" class=\"img-fluid\">
                                <h5>{$sp['LaptopName']}</h5>
                            </figure>
                            {$sp['Price']}<br>
                            <button class=\"btn btn-success\" >MUA HÀNG ONLINE</button>
                        </a> 
                        
                    </div>"
                    ?>
                     <?php 
                        $sp = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                        echo "<div class=\"col-lg-4\">
                        <a href=\"product_page.php?id={$sp['LaptopCode']}\">
                            <figure>
                                <img src=\"image/{$sp['ImageCode']}\" alt=\"\" class=\"img-fluid\">
                                <h5>{$sp['LaptopName']}</h5>
                            </figure>
                            {$sp['Price']}<br>
                            <button class=\"btn btn-success\" >MUA HÀNG ONLINE</button>
                        </a> 
                        
                    </div>"
                    ?>
                    
                    <?php 
                        $sp = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                        echo "<div class=\"col-lg-4\">
                        <a href=\"product_page.php?id={$sp['LaptopCode']}\">
                            <figure>
                                <img src=\"image/{$sp['ImageCode']}\" alt=\"\" class=\"img-fluid\">
                                <h5>{$sp['LaptopName']}</h5>
                            </figure>
                            {$sp['Price']}<br>
                            <button class=\"btn btn-success\" >MUA HÀNG ONLINE</button>
                        </a> 
                        
                    </div>"
                    ?>
                     <?php 
                        $sp = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                        echo "<div class=\"col-lg-4\">
                        <a href=\"product_page.php?id={$sp['LaptopCode']}\">
                            <figure>
                                <img src=\"image/{$sp['ImageCode']}\" alt=\"\" class=\"img-fluid\">
                                <h5>{$sp['LaptopName']}</h5>
                            </figure>
                            {$sp['Price']}<br>
                            <button class=\"btn btn-success\" >MUA HÀNG ONLINE</button>
                        </a> 
                        
                    </div>"
                    ?>
                    
                    <?php 
                        $sp = mysqli_fetch_array($sql, MYSQLI_ASSOC);
                        echo "<div class=\"col-lg-4\">
                        <a href=\"product_page.php?id={$sp['LaptopCode']}\">
                            <figure>
                                <img src=\"image/{$sp['ImageCode']}\" alt=\"\" class=\"img-fluid\">
                                <h5>{$sp['LaptopName']}</h5>
                            </figure>
                            {$sp['Price']}<br>
                            <button class=\"btn btn-success\" >MUA HÀNG ONLINE</button>
                        </a> 
                        
                    </div>"
                    ?>
                    
                    
                </div>
            </div>
    
                
           
        </div>
        <?php  include('quick_layout/footer.php')?> 
        
    </div>
        
</body>
</html>