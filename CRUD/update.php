<?
$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "test1";
$conn = new mysqli($servername, $username, $password, $db);
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $des = $_POST['description'];
    $price = $_POST['price'];
    $querry = "INSERT INTO sanPham (name, description, price) VALUES ('$name', '$des', '$price')";
    $result = $conn->query($querry);
    if ($result) {
        header(
            'location:read.php'
        );
    } else {
        echo "có lỗi xảy ra: " . mysqli_errno($conn);
    }
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="<? echo $_SERVER["PHP_SELF"] ?>">
        <label for="">
            name
        </label>
        <input type="text" name="name" id="">
        <label for="">description</label>
        <input type="text" name="description" id="">
        <label for="">Price</label>
        <input type="number" name="price" id="">
        <button name="submit" type="submit">SEND</button>
    </form>
</body>

</html>