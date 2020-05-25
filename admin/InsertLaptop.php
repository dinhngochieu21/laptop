<html>
<head>
    <title>Chèn Dữ Liệu</title>
    <meta charset="utf-8">
</head>
<body>
<h2>Chèn Dữ Liệu</h2>
<!-- <?php
   // require('../controller/connect_db.php');
?> -->

<form method="POST" action="control/InsertLaptop.php">
    
    <p>
        <label for="LaptopName">LaptopName:</label>
        <input id="LaptopName" name="LaptopName" type="text" value="" required="true">
    </p>
    <p>
        <label for="LaptopCompany">LaptopCompany:</label>
        <input id="LaptopCompany" name="LaptopCompany" type="text" value="" required="true">
    </p>
    <p>
        <label for="Image">Image:</label>
        <input id="Image" name="Image" type="text" value="" required="true">
    </p>
    <p>
        <label for="Price">Price:</label>
        <input id="Price" name="Price" type="text" value="" required="true">
    </p>
    <p>
        <label for="LaptopInfomation">LaptopInfo:</label>
        <input id="LaptopInfomation" name="LaptopInfomation" type="text" value="" required="true">
    </p>
    <p>
        <input type="submit" value="Cập nhật">
    </p>
</form>

</body>
</html>