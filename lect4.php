<?php

echo "<h3>loops in php </h3>";
echo "for loop 'كلما'"; 
echo "<br>";
for($i=0;$i<10;$i++){
                      echo $i . "<br>";
}
for($i=0 ; $i<5;$i++){
                      echo 'user0' . $i+1 ."<br>";
}

echo "<br>";
echo "while loop 'طالما'"; 
echo "<br>";
$c = 0;
while($c < 10){
                      echo $c +1 . "<br>";
                      $c++;
}

echo "rewrite the while loop";
echo "<br>";
for($c =0 ; $c<10 ; $c++){
                      echo $c + 1 . "<br>";
}
echo "<br>";
echo "Do while";
echo "<br>";
// $m = 0;
// do{
//                       echo $m . '<br>';
//                       $m++;
// }while($m<=5){
//                       echo "done";
// }

echo "<br>";
echo "array loop";
echo "<br>";
$arr = ["Ali" ,123 , false , NULL, "amjad"];
foreach ($arr as $i){
                      echo $i . "<br>";
}

echo "variable scope مجال نطاق المتغير";
echo "<br>";
echo "<br>";
echo "comparson";
echo "<br>";
echo "strickt vs loose (weak) comparson";
$a = 10;
$b = '10';
echo "<br>";
if($a == $b){
                      echo "YES";// weak comparsion search on value
}else{
                      echo "No";
}
echo "<br>";
if($a === $b){
                      echo "YES";// strickt comparsion(المقارنة القوية) search on value & datatype
}else{
                      echo "No";
}

//!= search on value
//!= search on value & datatype

echo "increment operators";
echo "<br>";
$x = 5;
echo ++$x;
echo "<br>";
echo $x++;
echo "<br>";
echo $x;
echo "decrement operators";
$x = 4;
echo --$x;
echo "<br>";
echo $x--;
echo "<br>";
echo $x;
echo "<br>";
for($h = 20 ; $h >2 ; $h--){
                      echo $h . "<br>";
}
