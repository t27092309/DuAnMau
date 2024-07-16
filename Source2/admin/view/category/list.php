<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Trang danh sách danh mục</h3>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th><a href="?act=category-create">Thêm mới</a></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($categoryList as $category): ?>
            <tr>
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

</body>
</html>