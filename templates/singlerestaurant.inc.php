<div class="container">
<ul class="nav nav-pills">
  <li role="presentation"><a href=".\?page=restaurants">Back</a></li>
</ul>
  <!--  <a class="btn btn-info btn-sm" href="#" role="button ">Back</a> -->
  <p>
			<a href=".\?page=restaurant.edit&amp;id=<?= $restaurant->id; ?>" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> Edit Restaurant</a>
		</p>

  <div class="media-body">
    <h4 class="media-heading"><strong><?= $restaurant->title; ?></strong></h4>
     <p>Rating:*****</p>
      <p>Discount: <?= $restaurant->discount; ?></p>
      <p>Address: <?= $restaurant->address; ?></p>
      <p>Phone: <?= $restaurant->phone; ?></p>
      <p class="btn btn-danger">Book Now</p>
</div>
<div class="media-right">
      <a href=".\?page=restaurant&amp;id=<?= $restaurant->id?>">
        <img class="media-object restaurantImg" src="img/foxglove.jpg" alt="restaurant view">
      </a>
    </div>  

    	<form method="POST" action="./?page=comment.create" class="form-horizontal">
            <div class="form-group">
            	<div class="col-sm-8 col-md-10">
                  <textarea id="comment" class="form-control" name="comment" rows="5" placeholder="write a comment"></textarea>
                </div>
            </div>
          
              <div class="form-group">
                <div class="col-sm-offset-4 col-sm-10 col-md-offset-2 col-md-10">
                  <button class="btn btn-success">
                    <span class="glyphicon glyphicon-ok"></span> Write a review
                  </button>
                </div>
              </div>
            </form>
    </div>


