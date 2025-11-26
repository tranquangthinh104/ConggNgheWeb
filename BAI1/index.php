<?php
require 'data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flowers</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
    <div><h1>Flowers</h1></div>
    <div>
        <a href="index.php">Người dùng quản trị</a>
        <a href="khach.php">Người dùng khách</a>
        <a href="them.php" class="btn btn-primary">Thêm loài hoa</a>
    </div>
    <div class="container">
        <table class="table">
            <thead>
        <tr>
            <th>Tên hoa</th>
            <th>Mô tả</th>
            <th>Ảnh</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($flowers)) {?>
            <?php foreach ($flowers as $flower) { ?>
                <tr>
                    <td><?php echo $flower['tenhoa'] ?></td>
                    <td><?php echo $flower['mota'] ?></td>
                    <td><img src="images/<?php echo $flower['hinh_anh']?>" width="100"></td>
                </tr>
            <?php } ?>

        <?php }else {?>
            <tr>
                <td colspan="3">Chưa có hoa nào được thêm vào</td>
            </tr>
        <?php } ?>
        </tbody>
        </table>
    </div>
</div>
</body>
</html>