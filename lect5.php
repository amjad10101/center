<?php
// include 'header.php';
require 'header.php';
echo "<h3>Functions in php</h3>";//block of code can reuse 
function jabaneesCar(){
                      echo "Hello<br>";
}
jabaneesCar();

// function sumTowNumbers(){
//                       echo 5 + 7;
// }
// sumTowNumbers();

function sumTowNumbers($n1,$n2){
                      // echo $n1 + $n2;
                      return $n1 + $n2; //يمكن اجراء العمليات عليها
}
echo (sumTowNumbers(5,5)/2);


function substraction($n1,$n2 = 0){
                      return $n1 - $n2;
}
echo "<br>";
$res =  substraction(10);
echo $res - 4;
echo "<br>";

function welcome($username = "visitor"){
                      echo 'welcome ' . $username;
}
welcome('Mohmmed');

echo "<br>";
function evenNumber($n1,$n2){
                      for($i = $n1; $i <= $n2 ;$i++){
                                            if ($i % 2 == 0){
                                                                  echo $i . "<br>";
                                            }
                      }
}
evenNumber(9,19);

echo "<br>";
$arr = ['bananna' , 'orange' , 'apple'];
$arr = ['bananna' , 'lemon' , 'apple'];
function repalceitem($arr,$i,$newval){
                      $arr[$i] = $newval;
                      return $arr;
                      
}
repalceitem($arr,1,'amjad');
print_r($arr);
 
?>


<?php

$x = 50;
function printx($x){
                  global $x;
                  $x++;
                  echo $x . '<br>';

}

echo $x . '<br>';
printx($x);
echo $x . '<br>';
// return
function returnV(){
                      return 'ABC';
                      //any code after return consider 
                      // it's not exist return should exist in the last of function
                      echo 'test';

}
returnV();


?>