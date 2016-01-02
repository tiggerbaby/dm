<?php

namespace App\Views;

class BusinessEmailView extends EmailView
{
  public function render() 
  {
    $this->sendEmail("templates/businessemail.inc.php");
    
  }
  
}
