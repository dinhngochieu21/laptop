<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    
    <title>Fap-Fap The biggest laptop store</title>
    <link rel="stylesheet" href="css/header.css" type="text/css">
    <link rel="stylesheet" href="css/style1.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/2fd94a014f.js" crossorigin="anonymous"></script>
    <script src="jquery-3.4.1.min.js" ></script>
    

</head>
<body>
   
    <!-- Page Preloder -->
    <?php
        include('controller/sign-in.php');
    ?>
    
    
    <?php include('quick_layout/header.php') ?>
    <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4">
                    <div class="page-breadcrumb ">
                        <h2>Đăng nhập<span>.</span></h2>
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
                <div class="col-lg-4">
                    <form action="" method="POST" class="contact-form  ">
                        <div class="row">
                            <div class="col-lg-12">
                                <input id="email" type="email" name="email" required placeholder="Email" class="form-control-lg">
                            </div>
                           
                            <div class="col-lg-12">
                                <br>
                                <input  id="password"type="password" name="password" required placeholder="Mật khẩu" class="form-control-lg">
                            </div>
                            <div class="mx-auto mb-3 text-danger">
                                <?php
                                    if($message != ''){
                                        echo"$message";
                                    }
                                ?>
                            </div>
                            <div class="col-lg-12  mb">
                                <br>
                                <button type="submit" name="signIn" class="btn btn-success">Đăng nhập</button>
                            </div>
                            <div class="check">
                                <br>
                                <a href="register.php" >
                                    <pre class="text-danger">  Bạn chưa có tài khoản?
                                    </pre>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
            
        </div>
    </div>
 

</body>

</html>
