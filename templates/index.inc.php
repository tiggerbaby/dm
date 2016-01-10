

<div class="jumbotron" id="searchbarBackground">
<div class="container">
<div class="cext-center" id="searchBar">
        <div class="input-group input-group-lg">
          <!-- <span class="input-group-addon glyphicon glyphicon-search"></span> -->
          <input type="text" class="form-control" placeholder="Restaurant name, location"/>
          <span class="input-group-btn">
            <button class="btn btn-info" type="button" id="searchButton">Search</button>
          </span>
        </div>
      </div>
 </div>
</div>

<div class="container">

  <?php if(count($restaurants) > 0): ?>
    <!-- <ul class="media-list col-sm-4 col-md-4"> -->
      <?php foreach($restaurants as $restaurant): ?>
        <?php $averageRating = $restaurant->averageRating(); ?>
        <!-- <li class="media"> -->
  <div class="media-left">
      <a href=".\?page=restaurant&amp;id=<?= $restaurant->id?>">
        <img class="media-object thumbnailImg" src="img/foxglove.jpg" alt="restaurant view">
      </a>
    </div>
  <div class="media-body">
    <h5 class="media-heading"><strong><?= $restaurant->title; ?></strong></h5>
     <div class="rateit" data-rateit-value="<?= $averageRating / 2;?>" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
      <p>Discount: <?= $restaurant->discount; ?></p>
      <p>Address: <?= $restaurant->address; ?></p>
      <p>Phone: <?= $restaurant->phone; ?></p>
</div>
    
     <?php endforeach; ?>
<?php endif; ?>


<!-- <div class="row">
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
 </div> -->
</div>

            
