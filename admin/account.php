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
        
    </style>
</head>
<body>

<?php
    require('../controller/connect.php');

    // query students table
    $sql = 'SELECT * FROM `user`';

    $x = mysqli_query($con, $sql);

    if(!$x) {
        die('Query error: [' . $db->error . ']');
    }
        
    require('header.php');   
?>


<table class="table">
    <thead>
        <tr>
        
            <th>id</th>
            <th>user name</th>
            <th>email</th>
            <th>password</th>
            <!-- <th>LaptopInfo</th> -->
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_array($x, MYSQLI_ASSOC)) : ?>
            <tr>
        
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                <!-- <td><?php echo $row['LaptopInfomation']; ?></td> -->
                <td>
                    <a href="control/delete.php?LaptopCode=<?php echo $row['id']; ?>" class="delete">xóa</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
</body>
</html>