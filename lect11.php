<?php

use person as GlobalPerson;

echo "<h3>inheritance</h3>";

class person{
   
    public function __construct( private $name='Ali',private $role='Author')//constructor promotion 
    {   
        
    }
    public function setname($val)
    {
        $this ->name = $val;
    }
    public function getname()
    {
        return $this -> name;
    }
    public function setrole($val)
    {
        $this ->role = $val;
    }
    public function getrole()
    {
        return $this -> role;
    }
}
class admin extends Person{
    // public function __construct()
    // {
    //     echo "I am admin";
    // }
       private $isadmin = false;
       public function __construct()
       {
        $this-> isadmin = true;
       } 
}
$person1 = new Person();
$admin1 = new admin();
echo $admin1 -> getname();

?>