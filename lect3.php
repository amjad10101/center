<?php
echo "----- constant variable  المتغيرات   الثابتة -----";

define('PI' , 3.14);//variable but static
echo "<br>";
// PI = 53; //error can't writable
echo PI;

echo "<h2>----- Conditions In php -----</h2>";

echo "<br>";
$m = 70;
if($m < 60){
                      echo "failed";
}
elseif($m <= 70){
                      echo "acceptable";
}
elseif($m <= 80){
                      echo "good";
}
elseif($m <= 90){
                      echo "very good";
}

else{
                      echo "excelant";
}

echo "<br>";
$is_graduated = true;
if($is_graduated){                          //defualt boolean true
                      echo "graduated";
}else{
                      echo "not"; 
}
echo "<br>";
$avg = 80;
echo "<h3>Short hand if !!</h3>";
echo ($avg > 60) ? "pass" : "failed";
echo "<h3> switch statmente!</h3>"; //تستخدم لمقارنة حالات مخصصة او مقييدة 

$t = strtolower('Red');
switch($t){
                      case 'green';
                      echo 'Go';
                      break;

                      case 'orange';
                      echo 'Ready';
                      break;

                      case 'red';
                      echo 'stop';
                      break;
                      default;
                      echo "take care";
                      break;
}
echo "<br>";
$d = Date('D');
echo $d;
echo "<br>";
switch($d){
                      case 'Sat';
                      echo 'Holiday';
                      break;

                      case 'sun';
                      case 'tue';
                      echo 'mobile , web';
                      break;

                      case 'mon';
                      case 'web';
                      echo 'security , network';
                      break;

                      case 'thus';
                      echo 'network';
                      break;
                      default:
                       echo "Error , check day";
                       break;
}

?>