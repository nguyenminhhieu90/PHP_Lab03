<?php
if(isset($_POST['btn_login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(isset($_POST['remember'])){
        setcookie("username", $username);
        setcookie("password", $password);
     
    }
}

$username = $password = "";
?>
<?php
$checked = false;
$username = $password = "";

if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){


$username = $_COOKIE['username'];
$password = $_COOKIE['password'];
$checked = true;

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
    <form action="" method="post">
        <label for="username">Username</label>
        <input value="<?php echo $username; ?>" type="text" name="username" id="username"> <br><br>
        <label for="password">Password</label>
        <input value="<?php echo $password; ?>" type="text" name="password" id="password"> <br><br>
        <label for="remember">Ghi nhớ đăng nhập</label>
        <input <?php echo ($checked)?"checked":"" ?> type="checkbox" name="remember" id="remember"> <br><br>
        <input type="submit" value="Login" name="btn_login">

    </form>

</body>
</html>