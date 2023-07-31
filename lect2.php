<?php

echo '<h1>Number function</h1>';
echo '<br>';
$avg = 88.8287;
$avg1 = 5.0;
$newvar = null;
echo round($avg,2);
echo '<br>';
echo round($avg1);
echo '<br>';
echo gettype($newvar);//return datatype just
echo '<br>';
var_dump($avg1);//return datatype and value
echo '<br>';
echo is_nan($avg);//not a number.
echo '<br>';
echo is_int($avg); // is an integer.

echo  "----- compopund Datatype Variable (Array - object - ) -----";
echo '<br>';
echo  "----- array (indexed array ) -----";

echo '<br>';
echo '<br>';
$arr = ['Ali' , 30];
var_dump($arr);
echo '<br>';
$arr[] = true;
$arr[1] = 50;//update on the array
$arr[5] = 60;// index not exist 

echo  "----- array function -----";

array_pop($arr);//delete the last index
array_push($arr,88.8);//Add index in the last


echo '<pre>'; //used to organize the array 
print_r($arr);
echo '<pre/>';     

echo  "----- array (associative array ) -----";

$arr2 = ['name' => 'Ali',
         'avg' => 90.3 ,
         'collage' => 'ICT',
         'uavg' => 88.8,
         'is_graduated' => false ,
         'address' => 'Gaza',
         'skills' => 'proramming',
];
echo '<br>';
echo $arr2['uavg'];
$arr2['level'] = 3;
$arr2['level'] = 5;//update on array
array_pop($arr2);
print_r($arr2);

echo  "----- array (multimentional array ) -----";
/*$arr3 = [             'fruits' => ['banana','apple' => ['red' , 'green']],
                      'vegtables' => ['onioin' , 'tomato']];*/

$arr3 = [             '0' => ['banana','apple' => ['red' , 'green']],
                      '1' => ['onioin' , 'tomato']];
print_r($arr3);
var_dump($arr3);
echo '<br>';
echo $arr3['1'][0]; //show onion

?>