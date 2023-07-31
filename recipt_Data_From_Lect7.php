<?php
echo "<h3>Result.</h3>";
echo "<br>";
if(isset($_POST['send'])){
                      if (strlen($_POST['name']) < 3){
                                            echo "<br> Name must be 3 chars at least <br>";               
                      }
                      if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                                            echo "Please,Enter a valid email..";
                      };
                      if(!isset(($_POST['gender']))){
                                            echo "Please, select gender..";
                      };
                      if(!isset(($_POST['password']))){
                                            echo "Please, write password..";
                      };
                      if(!isset(($_POST['confirm']))){
                                            echo "Please, confirm password..";
                      };
                      if($_POST['email'] != $_POST['confirm']){
                                            echo "The password is different!!";
                      }
                      echo "<br>";
                      echo 'name: ' . $_POST['name'] ;
                      echo "<br>";
                      echo 'email: ' . $_POST['email'] ;
                      echo "<br>";
                      echo 'password: ' .  $_POST['password'];
                      echo "<br>";
                      if(isset($_POST['gender'])){
                                            echo "gender is " . $_POST['gender'];
                      }
                      echo "<br>";
                      if(isset($_POST['remember'])){
                                            echo "remember is true";
                      }
}


echo "<br>";
echo '<a href="lect7.php">Back</a>';



?>