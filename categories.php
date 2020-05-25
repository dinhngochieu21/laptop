<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    
    <title>Fap-Fap The biggest laptop store</title>
    <link rel="stylesheet" href="css/style1.css" type="text/css">
    <link rel="stylesheet" href="css/header.css" type="text/css">
    <script src="https://kit.fontawesome.com/2fd94a014f.js" crossorigin="anonymous"></script>
    <script src="jquery-3.4.1.min.js" ></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    

</head>

<body>
    <div class="content">
        <?php 
        session_start();
        include('quick_layout/header.php')?>
        <?php include('controller/categories.php') ?>
        <div class="product row">
            
            <?php
                while($row = mysqli_fetch_array($result)){
                    echo"<div class=\"col-lg-3 col-md-3\">
                            <div class=\"single-product-item\">
                            <a href=\"product_page.php?id={$row['LaptopCode']}\">
                                <figure>
                                    <img src=\"image/{$row['ImageCode']}\" alt=\"\" class=\"img-fluid\">
                                    <div class=\"p-status\">new</div>
                                </figure>
                            </a>    
                        <div class=\"product-text\">
                            <a href=\"product_page.php?id={$row['LaptopCode']}\">
                                <h6>{$row['LaptopName']}</h6>
                            </a>
                            <p>{$row['Price']} Đ</p>
                        </div>
                    </div>
                    </div>";  
                }            
            ?>
        </div>
        <?php  include('quick_layout/footer.php')?> 
    </div>
    
</body>