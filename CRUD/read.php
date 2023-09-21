<?
//nhúng cấu hình file
include 'connect.php';
//truy vấn danh sách sản phẩm
$query = "SELECT * FROM sanPham";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="crud.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lí sản phẩm</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td{
            text-align: center;
            display:block;
        }
    </style>
</head>

<body>
    <h2>Danh sách sản phẩm</h2>
    <a href="update.php">Thêm sản phẩm mới</a>
    <table border="1px">
        <tr>
            <th bgcolor="wheat">Id</th>
            <th bgcolor="wheat">Tên Sản phẩm</th>
            <th bgcolor="wheat">Mô Tả</th>
            <th bgcolor="wheat">Giá</th>
            <th bgcolor="wheat" colspan="2">Hành động</th>
        </tr>
        <?
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td> " . $row['id'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['description'] . "</td>";
            echo "<td>" . $row['price'] . "</td>";
            // echo "<td>";
            echo "<td>" . "<a href='reupdate.php?id=" . $row['id'] . "'> Sửa</a>" . "</td>";
            echo "<td>" .  "<a href='delete.php?id=" . $row['id'] . "'> Xoá</a>" ."</td>";

            echo "</tr>";
        }
        ?>
    </table>
</body>
<?
mysqli_close($conn);
?>
</html>