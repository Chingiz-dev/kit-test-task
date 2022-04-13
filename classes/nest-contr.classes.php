<?php

class NestContr extends Nest {

  public $nestId;
  private $nestParent;
  public $nestTitle;
  private $nestDesc;

  public function __construct($nestId, $nestParent, $nestTitle, $nestDesc) {
    $this->nestId = $nestId;
    $this->nestParent = $nestParent;
    $this->nestTitle = $nestTitle;
    $this->nestDesc = $nestDesc;
  }

  public function addNest() {

   //add checkups

    $this->setNest($this->nestParent, $this->nestTitle, $this->nestDesc);
  }
  
  public function updateNest() {

    //add checkups 
    $this->changeNest($this->nestId, $this->nestParent, $this->nestTitle, $this->nestDesc);

  }

  public function deleteNest() {

    $loc = $this->nestId;
    //add checkups
    $nests = $this->getNestsByParent($loc);   
    $this->removeNest($loc);
    return $nests;

  }

}