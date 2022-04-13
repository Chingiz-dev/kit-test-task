<?php

class NestgetContr extends Nest {

  private $nest;
  
  public function returnNest() {  
    $this->nest = $this->getNest();
    print_r(json_encode($this->nest));
  } 

}