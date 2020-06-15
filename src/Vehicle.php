<?php

namespace App;

class Vehicle {

  public $type;

    
  public function __construct($type)
  {
    $this->type= $type;
       
  }


  public static function constructTourism()
  {
    
    return $tourism= new Vehicle('Tourism Car');
    
   
   }

  public static function constructMotorBike()
  {
    return $vehicle= new Vehicle('MotorBike');
    
  }
}
