<?php
echo "<h3>DB connecttion</h3>";
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "project";
$conn = mysqli_connect($db_host,$db_username,$db_password,$db_name);
$selectQuery = 'SELECT * FROM users';
$result = mysqli_query($conn,$selectQuery);//تبعت جملة الإستعلام على اتصال داتا بيز
$users = mysqli_fetch_all($result , MYSQLI_ASSOC);// all records if one record (mysqli_fetch_row)
//جلب الصفوف 
print_r($users);



// or die('connection error: ' . mysqli_connect_error());
// $conn = mysqli_connect($db_host,$db_username,$db_password,$db_name);
// if(!$conn){
//                       mysqli_connect_error($conn);
//                       // echo mysqli_connect_errno($conn);
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
                      <title>Document</title>
</head>
<body>
<table border="1">    <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>password</th>
                                            <th>Email</th>
                                            <th>status</th>
                      
                      </tr>
                      
                      <tr>
                                            <td><?php echo $users[0]['id']?></td>
                                            <td><?php echo $users[0]['name']?></td>
                                            <td><?php echo $users[0]['password']?></td>
                                            <td><?php echo $users[0]['email']?></td>
                                            <td><?php echo $users[0]['status']?></td>
                      </tr>

</table>
</body>
</html>