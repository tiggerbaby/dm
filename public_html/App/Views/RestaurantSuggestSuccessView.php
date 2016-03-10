<?php

namespace App\Views;

class RestaurantSuggestSuccessView extends TemplateView
{

  public function render()
  {
      $page = "restaurantsuggestsuccess";
      $page_title = "Thanks for the suggestion!";
      include "templates/master.inc.php";
  }

  protected function content()
  {
      include "templates/restaurantsuggestsuccess.inc.php";
  }
}