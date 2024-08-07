
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- 1. Tiêu đề trang -->
    <h3>Trang Tạo Mới</h3>
    <form action="" method="post" enctype="multipart/form-data">

        <div style="margin-bottom: 16px;">
            <span>Nhập tên:</span>
            <input type="text" name="name" value="<?= $product->name ?>">
        </div>

        <div style="margin-bottom: 16px;">
            <span>Nhập giá:</span>
            <input type="text" name="price" value="<?= $product->price ?>">
        </div>

        <div style="margin-bottom: 16px;">
            <span>Nhập đường dẫn ảnh:</span>
            <input type="text" name="img" value="<?= $product->img ?>">

            <div>
                <span>Chọn ảnh:</span>
                <input type="file" name="file_upload">
            </div>
        </div>

        <div style="margin-bottom: 16px;">
            <span>Nhập mô tả:</span>
            <input type="text" name="description" value="<?= $product->description ?>">
        </div>

        <div style="margin-bottom: 16px;">
            <span>Nhập số lượt xem:</span>
            <input type="int" name="view" value="<?= $product->view ?>">
        </div>

        <div style="margin-bottom: 16px;">
            <span>Nhập id category:</span>
            <input type="int" name="idcategory" value="<?= $product->idcategory ?>">
        </div>

        <div style="margin-bottom: 16px;">
            <button type="submit" name="submitForm">Create</button>
        </div>

    </form>

    <div>
        <a href="?act=product-list">Return</a>
    </div>

    <p style="color:red"><?= $tbLoi ?></p>
    <p style="color:green"><?= $tbThanhCong ?></p>



</body>

</html>
