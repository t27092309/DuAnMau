
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 1. Tiêu đề trang -->
    <h3>Trang chỉnh sửa sản phẩm</h3>
    <form action="" method="post" enctype="multipart/form-data">

        <div style="margin-bottom: 16px;">
            <span>Nhập tên:</span>
            <input type="text" name="name" value="<?= $category->name ?>">
        </div>

        <div style="margin-bottom: 16px;">
            <button type="submit" name="submitForm">Update</button>
        </div>

    </form>

    <div>
        <a href="?act=category-list">Return</a>
    </div>

    <p style="color:red"><?= $tbLoi ?></p>
    <p style="color:green"><?= $tbThanhCong ?></p>



</body>

</html>
