<?php
echo "<h1>cookie -- sessions<h1>";
setcookie('mysite','litemode',time()+3);
// setcookie('mysite','litemode',time()-1);//ايقاف الكوكي
// echo ($_COOKIE['mysite']);
echo "<h1>cookie -- sessions<h1>";
session_start();
$name = "Ali";
$_SESSION['name'] = $name;
if(isset($_SESSION['name'])){
    echo $_SESSION['name'];
}




?>