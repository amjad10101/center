<?php
echo "<h3>Super Globle array</h3>";
echo "<pre>";
print_r($_GET);
print_r($_POST);
print_r($_REQUEST);//get + post
print_r($_SERVER['PHP_SELF']);
print_r($_COOKIE);
print_r($_SESSION);
print_r($_FILES);
echo "</pre>";

?>