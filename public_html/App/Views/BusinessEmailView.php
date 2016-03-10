<?php

namespace App\Views;

class BusinessEmailView extends EmailView
{
  public function render() 
  {
  	extract($this->data);
  	
    $this->sendEmail("templates/businessemail.inc.php");
    
  }
  
}
