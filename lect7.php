
<?php

$name = "";
$email = "";
$password = "";
$confirm = "";
$gender  = ""; 
$remember = "";
$erorrs2 = []
$erorrs = [
                      'name' => '',
                      'email' => ''
];
if(isset($_POST['send'])){
                      $name = $_POST['name'];
                      $email = $_POST['email'];
                      // $name = $_POST['password'];
                      // $name = $_POST['confirm'];
                      // $name = $_POST['gender'];
                      // $name = $_POST['remember'];
                      if(strlen($name) < 3 ){
                                            // echo "ame must be 3 chars at least <br>";
                                            // $erorrs['name'] = 'name must be 3 chars at least';
                      }
                      if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                                            // echo "enter valid email";
                                            // $erorrs['email'] = 'enter valid email';


                      }
}


?>
<form action="" method="post" anctype="">

<label>Name:</label>
<input type="text" name="name" value="<?php echo $name?>"><br/>
<span><?php echo $erorrs['name'];?></span>

<br><br>
<label>Email:</label>
<input type="email" name="email" value="<?php echo $email?>"><br/>
<span><?php echo $erorrs['email'];?></span>
<!-- <br><br>
<label>password:</label>
<input type="password" name="password">
<br><br>
<label>confirm password:</label>
<input type="password" name="confirm">
<br><br>
<input type="radio" name="gender">male
<input type="radio" name="gender">female
<br><br>
<input type="checkbox" name="remember">remember me -->

<br><br>
<input type="submit" name="send">
</form>
