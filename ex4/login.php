<?php
session_start();
if(isset($_POST['btn_login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $arrData = array(
        'username' => 'admin',
        'password' => '123456'
    );
    if($arrData['username'] == $username && $arrData['password'] == $password){
        $_SESSION['userInfo'] = $arrData;
        header("Location:index.php");
    }
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
        <input  type="text" name="username" id="username"> <br><br>
        <label for="password">Password</label>
        <input  type="text" name="password" id="password"> <br><br>
   
        <input type="submit" value="Login" name="btn_login">

    </form>

</body>
</html>