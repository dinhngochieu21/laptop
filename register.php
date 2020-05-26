<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    
    <title>Fap-Fap The biggest laptop store</title>
    <link rel="stylesheet" href="css/header.css" type="text/css">
    <link rel="stylesheet" href="css/register.css" type="text/css">
    <script src="https://kit.fontawesome.com/2fd94a014f.js" crossorigin="anonymous"></script>
    <script src="jquery-3.4.1.min.js" ></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <!-- <?php
        session_start();
    ?> -->
    <!-- Page Preloder -->
    <?php
        include('controller/register.php');
    ?>
    
    
    <?php include('quick_layout\header.php') ?>
    
    <!-- Header End -->

    <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4">
                    <div class="page-breadcrumb ">
                        <h2>Đăng ký<span>.</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Contact Section Begin -->
    <div class="contact-section">
        <div class="container">
            <div class="row d-flex justify-content-center ">
                <div class="col-lg-12  ">
                    <form action="" method="POST" class="contact-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <input type="text" name="name" required placeholder="Tên" class="form-control-lg">
                                <input type="email" name="email" required placeholder="E-mail" class="form-control-lg">
                                <input type="password" name="password" required placeholder="Mật khẩu" class="form-control-lg">
                                <input type="password" name="confirmPassword" required placeholder="Nhập lại mật khẩu" class="form-control-lg">
                               
                            </div>
                            <div class="mx-6 mb-3 text-danger">
                                <?php
                                    if($passwordIsNotMatch != '') echo "$passwordIsNotMatch";
                                    if($emailUsed != '') echo "$emailUsed";
                                ?>
                            </div>
                            <div class="col-lg-12 ">
                                <br>
                                <button type="submit" name="register" class="btn btn-success" >Đăng ký</button>
                                <br>
                            </div>
                            <div class="col-lg-12">
                                <br>
                                <a href="sign-in.php" style="color:red">Bạn đã có tài khoản?</a>
                            </div>
                        </div>
                    </form>                   
                </div>
                
            </div>
            
        </div>
    </div>
    
    
</body>

</html>