<?
$id = $_GET["id"];
$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "test1";
$conn = new mysqli($servername, $username, $password, $db);
$sql = "DELETE FROM sanPham where id =$id";
$sq = $conn->query($sql);
if($sq == true ){
    header('location:read.php ' );
}else {
    echo "Lỗi ................";
}

?>