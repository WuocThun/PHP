<?
session_start();
//nếu header k hoạt động thì thêm ob_star();
ob_start();
// echo $_SESSION['login']['username'];
unset($_SESSION['login']);
echo $_SESSION['login']['username'];
header("location:index.php");
?>