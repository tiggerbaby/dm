
<div class="container">
 <h1>Restaurants</h1>
	<div class="col-lg-8" id="searchBar">
        <div class="input-group input-group-lg">
       <!--   <span class="glyphicon glyphicon-search form-control-feedback"></span> -->
          <input type="text" class="form-control" placeholder="Restaurant name, location"/>
          <span class="input-group-btn">
            <button class="btn btn-info" type="button" id="searchButton">Search</button>
          </span>  
        </div>
      </div>     
</div>


<div class="container">
  <div class="row">
   <div class="col-xs-6 col-md-4">
    <?php
      foreach($restaurant as $restaurants):?>
        <h2><?= $restaurants->title; ?></h2>
        <p><?= $restaurants->discount; ?></p>
        <p>discount:<?= $restaurants->address; ?></p>
        <p><?= $restaurants->phone; ?></p>
      <?php endforeach; ?>
    
  </div>
  

   
   
    <a href="#" class="thumbnail">
      <img src="http://placehold.it/350x200" alt="restaurant view">
    </a>
  </div>
   
  <div class="col-xs-6 col-md-4">
    <a href="#" class="thumbnail">
      <img src="http://placehold.it/350x200" alt="restaurant view">
    </a>
  </div>

  <div class="col-xs-6 col-md-4">
    <a href="#" class="thumbnail">
      <img src="http://placehold.it/350x200" alt="restaurant view">
    </a>
  </div>  

  <div class="col-xs-6 col-md-4">
    <a href="#" class="thumbnail">
      <img src="http://placehold.it/350x200" alt="restaurant view">
    </a>
  </div>
   
  <div class="col-xs-6 col-md-4">
    <a href="#" class="thumbnail">
      <img src="http://placehold.it/350x200" alt="restaurant view">
    </a>
  </div>

  <div class="col-xs-6 col-md-4">
    <a href="#" class="thumbnail">
      <img src="http://placehold.it/350x200" alt="restaurant view">
    </a>
  </div>  
  
   <p class="col-sm-12"> 
      <a href=".\?page=restaurantsuggest" class="text-danger">
      Are we missing any restaurant? Suggest a place to include in Dining Mate here.
  </a></p>


  </div>





 
