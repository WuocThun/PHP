<?
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>

<body>
    <?
    if (isset($_SESSION['login']['username'])) {
    ?>
        <a href="logout.php">Đăng xuất</a>
    <?
    } else {
    ?>
        <a href="login.php">Đăng nhập</a>
    <?
     }
    ?>
    <hr>
    <h1>T-Bakery</h1>
    <a href="index.php">Trang chủ</a>
    <a href="course.php">Khoá học</a>
    <a href="account.php">Tài khoản</a>
    <hr>
    <p>Trang chủ</p>
    <?
    if (isset($_SESSION['login']['username'])) {
        echo "Đăng nhập thàn công, xin chào: <b> {$_SESSION['login']['username']}</b>";
    } else {
        echo "Bạn cần đăng nhập vào hệ thống...  <a href='login.php'>Tại đây</a>";
    }
    ?>
</body>

</html>