<?php

use person as GlobalPerson;

echo "<h3> Object Orieanted Programming In php!! </h3>";
class Person{
    //1- properties خصائص
    //access modifior (puplic, private,protected)
    private $fname;
    private $lname;
    public $age;
    //contsructor البناء - المُنشئ
    public function __construct($x='', $y='',$age='')// يتم تشغيلها عند انشاء object
    {
        echo "hello person: ";
        $this-> fname = $x; 
        $this-> lname = $y;
        $this-> age = $age;
        echo  $this-> fname ." ". $this-> lname ." ". $this-> age ;
    }

    //2- methodes (behaivor)خصائص سلوكية
    public function isGraduated(){
        return true;
    }
    function fullNmae(){
        return $this-> fname . " ". $this ->lname ;
    }
    function getfname(){
        return $this -> fname; //getter
    }
    function setfnmae($x){
         $this -> fname = $x; // setter
    }
    function getlname(){
        return $this -> lname; //getter
    }
    function setlname($x){
         $this -> lname = $x; // setter
    }
   
    function setage($x){
         $this -> fname = $x; // setter
    }


}

$preson1 = new Person("mona" , "ali" , 30); // instance
 

//self descriptor استدعاء ميثود من كلاس من دون عمل ابجكت
// $preson2 = new Person(); 
// print_r($preson1);
// echo $preson1 -> getfname(); // object -> properties
// echo $preson1 -> fullNmae();


?>