<div class="container">
  <h1>Search Results for '<?= $q; ?>':</h1>
  <?php if(count($restaurants) > 0): ?>
  <div class="row">
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
     <?php else: ?>
      <p>Sorry, there is 0 reslut. </p>
       <p> 
          <a href=".\?page=restaurantsuggest" class="red">
          Are we missing any restaurant? Suggest a place to include in Dining Mate here.
         </a>
     </p>
    <?php endif; ?> 
  </div>
</div>