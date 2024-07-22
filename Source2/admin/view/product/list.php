<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input[type='submit'],
        input[type='reset'],
        input[type='button'] {
            border-radius: 5px;
            padding: 5px 10px;
            background-color: rgb(235, 235, 235);
            border: 1px solid rgb(177, 177, 177);
        }
        input[type='button']:hover,
        input[type='submit']:hover,
        input[type='reset']:hover {
            background-color: rgb(209, 209, 209);
            border: 1px solid rgb(177, 177, 177);
            cursor: pointer;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #999;
        }
        table th:nth-child(1) {
            width: 5%;
            padding: 20px 0px;
            background-color: #aaaaaa;
        }
        table th:nth-child(2) {
            width: 5%;
            background-color: #aaaaaa;
        }
        table th:nth-child(3) {
            width: 20%;
            background-color: #aaaaaa;
        }
        table th:nth-child(4) {
            width: 15%;
            background-color: #aaaaaa;
        }
        table th:nth-child(5) {
            width: 15%;
            background-color: #aaaaaa;
        }
        table th:nth-child(6) {
            width: 20%;
            background-color: #aaaaaa;
        }
        table th:nth-child(7) {
            width: 2%;
            background-color: #aaaaaa;
        }
        table th:nth-child(8) {
            width: 5%;
            background-color: #aaaaaa;
        }
        table th:nth-child(9) {
            width: 12%;
            background-color: #aaaaaa;
        }
        table td {
            padding: 10px 20px;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>
    <h3>Trang danh sách sản phẩm</h3>

    <div class="formDanhSach">
        <table border="1" style="margin-bottom: 10px;">
            <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Img</th>
                    <th>Description</th>
                    <th>View</th>
                    <th>Id Category</th>
                    <th><a href="?act=product-create" style="text-decoration: none; color: black"><input type="button" value="Thêm mới"></a></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productList as $product) : ?>
                    <tr>
                        <td><input type="checkbox" name="check"></td>
                        <td><?= $product->id ?></td>
                        <td><?= $product->name ?></td>
                        <td><?= $product->price ?></td>
                        <td>
                            <div style="height: 100%; width:100%;">
                                <img style="max-height: 100%; max-width: 100%" src="<?=   $product->img ?>">
                            </div>
                        </td>
                        <td><?= $product->description ?></td>
                        <td><?= $product->view ?></td>
                        <td><?= $product->idcategory ?></td>
                        <td>
                            <a href="?act=product-update&id=<?= $product->id ?>"><input type="button" value="Sửa"></a>
                            <a href="?act=product-delete&id=<?= $product->id ?>" onclick="return confirm('Chắc chắn xóa???')"><input type="button" value="Xóa"></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    <div class="row mb10">
        <input type="button" name="" value="Chọn tất cả">
        <input type="button" name="" value="Bỏ chọn tất cả">
        <input type="button" name="" value="Xoá các mục đã chọn">
    </div>
</body>

</html>