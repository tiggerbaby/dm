

<div class="jumbotron" id="searchbarBackground">
<div class="container">
<div class="cext-center" id="searchBar">
     <form method="GET" action="./" role="search">
        <div class="input-group input-group-lg">
          <!-- <span class="input-group-addon glyphicon glyphicon-search"></span> -->
           <input type="hidden" name="page" value="search">
          <input name="q" type="text" class="form-control" placeholder="Restaurant name, location or cuisine"/>
          <span class="input-group-btn">
            <button class="btn btn-info" type="submit" id="searchButton">Search</button>
          </span>
        </div>
        </form>
      </div>
 </div>
</div>

<div class="container">
 <h2  class="text-muted">Make a reservation on our website to get discount!</h2>
</div>

<div class="container">
 <h3 class="red">Recommended Restaurants</h3>
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
</div>

            
