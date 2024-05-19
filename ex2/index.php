<?php
    require("lib/template.php");
    get_header();
?>

<?php

if(!empty($_GET['page'])){
    $page = $_GET['page'];
}else{
    $page = "home";
}
$path = "pages/{$page}.php";
// echo $path;
if(file_exists($path)){
    require $path;
}else{
    require("inc/404.php");
}
?>

<?php
    get_footer();
?>