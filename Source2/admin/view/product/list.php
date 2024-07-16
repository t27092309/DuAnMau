<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Trang danh sách sản phẩm</h3>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Img</th>
                <th>Description</th>
                <th>View</th>
                <th>Id Category</th>
                <th><a href="?act=product-create">Thêm mới</a></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($productList as $product): ?>
            <tr>
                <td><?= $product->id ?></td>
                <td><?= $product->name ?></td>
                <td><?= $product->price ?></td>
                <td><?= $product->img ?></td>
                <td><?= $product->description ?></td>
                <td><?= $product->view ?></td>
                <td><?= $product->idcategory ?></td>
                <td>
                    <a href="?act=product-update&id=<?= $product->id ?>">Sửa</a>
                    <a href="?act=product-delete&id=<?= $product->id ?>" onclick="return confirm('Chắc chắn xóa???')">Xóa</a>
                </td>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <div>
        <a href="?act=product-create"></a>
    </div>
</body>
</html>