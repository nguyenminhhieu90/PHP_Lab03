

<?php
session_start();
echo "Trang chủ";
if(isset($_SESSION['userInfo'])){
    echo "<li><a href='logout.php'>Logout</a></li>";
}else{?>
<li><a href="login.php">Login</a></li>
<?php } 
?>
