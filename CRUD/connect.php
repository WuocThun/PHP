<?
$servername = "127.0.0.1";
$username = "root";
$password = "";
$db = "test1";
$conn = new mysqli($servername, $username, $password, $db);

if($conn->connect_error) {
    die("kết nối thất bại: " . $conn->connect_error); 
}else {
    echo "thanh cong";
};