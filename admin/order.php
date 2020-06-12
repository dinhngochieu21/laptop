<html>
<head>
    <title>Trang admin</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
       

        a {
            text-decoration:none;
            color: black;
        }

        body {
           
            padding-left: 50px;
            padding-top: 10px;
        }
        td img {
            width:40px;
            height:30px;
        }
    </style>
</head>
<body>

<?php
    require('../controller/connect.php');

    // query students table
    $sql = 'SELECT * FROM `orders`';

    $x = mysqli_query($con, $sql);

    if(!$x) {
        die('Query error: [' . $db->error . ']');
    }
        
    require('header.php');   
?>


<table class="table">
    <thead>
        <tr>
        
            <th>orderNumber</th>
            <th>orderDate</th>
            <th>status</th>
            <th>userID</th>
            <th>customerName</th>
            <th>customerAddress</th>
            <th>customerPhone</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_array($x, MYSQLI_ASSOC)) : ?>
            <tr>
        
                <td><?php echo $row['orderNumber']; ?></td>
                <td><?php echo $row['orderDate']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td><?php echo $row['userID']; ?></td>
                <td><?php echo $row['customerName']; ?></td>
                <td><?php echo $row['customerAddress']; ?></td>
                <td><?php echo $row['customerPhone']; ?></td>
                <td>
                    <a href="control/delete.php?LaptopCode=<?php echo $row['LaptopCode']; ?>" class="delete">xóa</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
</body>
</html>