<?php
require 'data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang người dùng</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if(empty($flowers)){
        echo "Chưa có hoa nào.";
    }
        else{
        foreach ($flowers as $flower) {
    ?>
    <h1> <?php echo $flower['tenhoa']?> </h1>
    <p> <?php echo $flower['mota']?> </p>
    <img src="images/<?php echo $flower['hinh_anh']?>" width="200">
    <?php }}?>
</body>
</html>
