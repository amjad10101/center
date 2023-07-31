<?php

echo  "----- Simple(primitive) Datatype Variable -----";
//int , double , string , boolean , null
echo "<br>";
$stat = "amjad mohmmed al faqawii";
$price = 30;
$fname = 'ali';
$gpa = 0.62;
$age = 20;
$is_student = false;
echo '<br>';
echo gettype($fname);
echo '<br>';
echo gettype($gpa);
echo '<br>';
echo gettype($age);
echo '<br>';
echo gettype($is_student);
echo '<br>';

echo "----- string function -----";

echo '<br>';
echo strtoupper($fname);
echo '<br>';
echo strtolower($fname);
echo '<br>';
echo ucfirst($fname);
echo '<br>';
echo ucfirst($stat);
echo '<br>';
echo strlen($stat);
echo '<br>';
echo strlen($fname)-1;// إيجاد قيمة حرف خلال نص 
echo '<br>';
echo $fname[strlen($fname)-1];//إيجاد الحرف خلال النص
echo '<br>';
echo str_replace('a' , 's' , $stat);
echo '<br>';

echo "----- Number function -----";

echo '<br>';
echo ' the sum: ' . $age + $price;
echo '<br>';
echo 'the multiplication: '. $age * $price;
echo '<br>';
echo 'the subtraction: '.$age  - $price;
echo '<br>';
echo 'the divion:'.$age  / $price;
echo '<br>';
echo 'the reminder:'.$age  % $price;
echo '<br>';
echo 'the power:'. 2 ** 2 ;
echo '<br>';
echo '$fname'; //'it doesn"t translate the single qoute inside  to string '
echo '<br>';
echo "$fname";//translate the double qoute inside  to value






?>