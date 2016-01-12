<div class="jumbotron">
<div class="container">
<!--  <h1>Restaurants</h1> -->
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
</div>




 <div class="container">
   <?php if(static::$auth->isAdmin()): ?>
     <p>
       <a href=".\?page=restaurant.create" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Add Restaurant</a>
     </p>
 <?php endif; ?>

  
<div class="row">
  <?php if(count($restaurants) > 0): ?>
    <?php foreach($restaurants as $restaurant): ?>      
      <?php $averageRating = $restaurant->averageRating(); ?>  
<div class="col-sm-6 col-md-4">
   <div class="thumbnail"> 
    <div class="media-left">
      <a href=".\?page=restaurant&amp;id=<?= $restaurant->id?>">
         <?php if($restaurant->poster !=""):?>
           <img src="./img/poster/100h/<?= $restaurant->poster ?>" alt="<?= $restaurant->title ?> image">
      </a>
         <?php else: ?>
            <img class="media-object thumbnailImg" src="img/dmlogo.png" alt="defalut restaurant view">
          <?php endif; ?>
     </a>      
  </div>
    <div class="media-body">
      <h5 class="media-heading"><strong><?= $restaurant->title; ?></strong></h5>
         <div class="rateit" data-rateit-value="<?= $averageRating / 2;?>" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
          <p>Discount: <?= $restaurant->discount; ?></p>
          <p>Address: <?= $restaurant->address; ?></p>
        <p>Phone: <?= $restaurant->phone; ?></p>
    </div>
 </div>
</div> 
     <?php endforeach; ?>
     <?php endif; ?>
 </div>
  <?php $this->paginate(".\?page=restaurants", $pageNumber, $pageSize, $recordCount); ?>
     <p class="col-sm-12"> 
          <a href=".\?page=restaurantsuggest" class="text-danger">
          Are we missing any restaurant? Suggest a place to include in Dining Mate here.
      </a></p>
</div>


  

   
  
</div>

 





 
