<html>
<head>
    <title>Trang admin</title>
    <meta charset="utf-8">
    <style>
        table tr td {
            border-bottom: 2px solid #ccc;
            padding-left: 15px;
            padding-right: 15px;
            margin-top: 5px;
        }

        a {
            text-decoration:none;
            color: black;
        }

        body {
           
            padding-left: 250px;
            padding-top: 100px;
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
    $sql = 'SELECT * FROM `laptop`';

    $x = mysqli_query($con, $sql);

    if(!$x) {
        die('Query error: [' . $db->error . ']');
    }
        
       
?>
<table>
    <thead>
        <tr>
        
            <th>LaptopCode</th>
            <th>LaptopName</th>
            <th>LaptopCompany</th>
            <th>Price</th>
            <th>LaptopInfo</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = mysqli_fetch_array($x, MYSQLI_ASSOC)) : ?>
            <tr>
        
                <td><?php echo $row['LaptopCode']; ?></td>
                <td><?php echo $row['LaptopName']; ?></td>
                <td><?php echo $row['LaptopCompany']; ?></td>
                <td><?php echo $row['Price']; ?></td>
                <td><?php echo $row['LaptopInfomation']; ?></td>
                <td>
                    <a href="control/delete.php?LaptopCode=<?php echo $row['LaptopCode']; ?>" class="delete">xóa</a>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>
</body>
</html>