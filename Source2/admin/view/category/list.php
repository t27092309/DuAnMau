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
            width: 10%;
            padding: 20px 0px;
            background-color: #ccc;
        }
        table th:nth-child(2) {
            width: 30%;
            background-color: #aaaaaa;
        }
        table th:nth-child(3) {
            width: 40%;
            background-color: #ccc;
        }
        table th:nth-child(4) {
            width: 20%;
            background-color: #aaaaaa;
        }
        table td {
            padding: 10px 20px;
            border: 1px solid #ccc;
        }
    </style>
</head>

<body>
    <h3>Trang danh sách danh mục</h3>

    <table border="1" style="margin-bottom: 10px;">
        <thead>
            <tr>
                <th></th>
                <th>ID</th>
                <th>Name</th>
                <th><a href="?act=category-create">Thêm mới</a></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categoryList as $category) : ?>
                <tr>
                    <td><input type="checkbox" name="check"></td>
                    <td><?= $category->id ?></td>
                    <td><?= $category->name ?></td>
                    <td>
                        <a href="?act=category-update&id=<?= $category->id ?>">Sửa</a>
                        <a href="?act=category-delete&id=<?= $category->id ?>" onclick="return confirm('Chắc chắn xóa')">Xóa</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <div class="row mb10">
        <input type="button" name="" value="Chọn tất cả">
        <input type="button" name="" value="Bỏ chọn tất cả">
        <input type="button" name="" value="Xoá các mục đã chọn">
    </div>

</body>

</html>