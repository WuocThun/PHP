<?
include 'connect.php';
if(isset($_POST['submit'])){
    $id = $_POST['submit'];
    $name = $_POST['name'];
    $des = $_POST['description'];
    $price = $_POST['price'];
    $sql = "UPDATE sanPham SET name = '$name', description = '$des', price = '$price' WHERE id = $id";
    $sp = $conn->query($sql);
    if($result){
        header("location:read.php");
    }else{
        echo "có lỗi: ". mysqli_error($conn);
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
        <input value="<?echo $name;?>" type="text" name="description" required>
        <label value="<?echo $des?>" for="">Price</label>
        <input type="number" name="price" id="">
        <button name="submit" type="submit">SEND</button>
    </form>
</body>

</html>