<?php session_start() ?>        
<div class="header row">
    
            <div class="logo col-md-3">
                <a href="./index.php">laptop</a>
                <a href="./index.php" class="white">pro</a>
            </div>
            <div class="option col-md-2">
                <select name="laptop-cate" id="laptop-cate">
                    <option value="all">all</option>
                    <option value="macbook">macbook</option>
                    <option value="dell">dell</option>
                    <option value="asus">asus</option>
                    
                </select>
            </div>
            <div class="search-bar col-md-2">
                <div class="search">
                    <input type="text" placeholder="search">
                </div>
            </div>
            <div class="giohang col-md-2" >
                <a href="shopping_cart.php">GIỎ HÀNG 0/đ 
                <i class="fas fa-shopping-cart"></i></a>
            </div>
            
            <?php
                if(isset($_SESSION['email'])){
                    
                    echo "<div class=\"giohang\"><a href=\"./index.php\" style = \"font-size:10px\">Xin chào, {$_SESSION['name']}</a></div>";
                }
                else {
                    echo"<div class=\"giohang\" style=\"margin-top:-10px:\"><a href=\"./register.php\" style = \"font-size:20px\" >Đăng ký</a>
                    <a href=\"./sign-in.php\" class=\"in\" style = \"font-size:20px\">Đăng nhập</a></div>
                    ";
                }
            ?>
            
            <?php
                if(isset($_SESSION['email'])){
                    echo "<div class=\"giohang\"><a href=\"controller\logout.php\"><i class=\"fas fa-sign-out-alt\"></i></a></div>";
                }
            ?>
                
            
            
            
            
            
</div>
<div class="menu">
    <ul>
        <li><i class="fas fa-shopping-cart"></i><br><a href="categories.php">Sản phẩm</a></li>
        <li><i class="fas fa-shopping-cart"></i><br><a href="">Linh kiện</a></li>
        <li><i class="fas fa-shopping-cart"></i><br><a href="">Khuyến mãi</a></li>
        <li><i class="fas fa-shopping-cart"></i><br><a href="">tin tức</a></li>
        <li><i class="fas fa-shopping-cart"></i><br><a href="">dịch vụ</a></li>
        <li><i class="fas fa-shopping-cart"></i><br><a href="">liên hệ</a></li>
    </ul>
</div>