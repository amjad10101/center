<?php

class vehicle{
    // private $wheelscount;
    // private $doorscount;
    public function __construct(private $wheelscount='4',private $doorscount='4')
    {
        
    }
    public function setwheelscount($val){
        $this ->wheelscount = $val;
    }
    public function getwheelscount($val){
        return $this ->wheelscount;
    }
    public function setdoorscount($val){
        $this ->doorscount = $val;
    }
    public function getdoorscount($val){
        return $this ->doorscount;
    }
}








?>