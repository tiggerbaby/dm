<div class="container">
<ul class="nav nav-pills">
  <li role="presentation"><a href=".\?page=restaurants">Back</a></li>
</ul>
  <!--  <a class="btn btn-info btn-sm" href="#" role="button ">Back</a> -->
  <?php if (static::$auth->isAdmin()): ?>
  <p>
			<a href=".\?page=restaurant.edit&amp;id=<?= $restaurant->id; ?>" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span> Edit Restaurant</a>
		</p>
   <?php endif; ?> 

  <div class="media-body">
    <h4 class="media-heading"><strong><?= $restaurant->title; ?></strong></h4>
     <p>Rating:*****</p>
      <p>Discount: <?= $restaurant->discount; ?></p>
      <p>Address: <?= $restaurant->address; ?></p>
      <p>Phone: <?= $restaurant->phone; ?></p>
      <button class="btn btn-danger" data-toggle="modal" data-target="#myModal">Book Now</button>
</div>
<div class="media-right">
      <a href=".\?page=restaurant&amp;id=<?= $restaurant->id?>">
        <img class="media-object restaurantImg" src="img/foxglove.jpg" alt="restaurant view">
      </a>
    </div>  
      
      <h3>Write a comment</h3>
    	<form method="POST" action="./?page=comment.create" class="form-horizontal">
            <div class="form-group">
            	<div class="col-sm-8 col-md-10">
                  <textarea id="comment" class="form-control" name="comment" rows="5" placeholder="write a comment"></textarea>
                </div>
            </div>
          
              <div class="form-group">
                <div class="col-sm-offset-4 col-sm-10 col-md-offset-2 col-md-10">
                  <button class="btn btn-success">
                    <span class="glyphicon glyphicon-ok"></span> Add Comment
                  </button>
                </div>
              </div>
            </form>
    </div>

<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Booking Form</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
  <div class="form-group">
    <label for="date" class="col-sm-2 control-label"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="date" name="date">
    </div>
  </div>
  <div class="form-group">
    <label for="time" class="col-sm-2 control-label"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></label>
    <div class="col-sm-10">
      <input type="time" class="form-control" id="time" name="time">
    </div>
  </div>
   <div class="form-group">
    <label for="people" class="col-sm-2 control-label"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></label>
    <div class="col-sm-3">
      <select class="form-control">
      <option value="1">1 person</option>
      <option value="2">2 people</option>
      <option value="3">3 people</option>
      <option value="4">4 people</option>
      <option value="5">5 people</option>
      <option value="6">6 people</option>
      <option value="7">7 people</option>
      <option value="8">8 people</option>
      <option value="9">9 people</option>
      <option value="10">10 people</option>
      <option value="11">11 people</option>
      <option value="12">12 people</option>
      <option value="13">13 people</option>
      <option value="14">14 people</option>
      <option value="15">15 people</option>
      <option value="16">16 people</option>
      <option value="17">17 people</option>
      <option value="18">18 people</option>
      <option value="19">19 people</option>
      <option value="20">20 people</option>
      <option value="large party">Large party</option>
   </select>
    </div>
  </div>
   <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Contact Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name">
    </div>
  </div>
   <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="example@example.com">
    </div>
  </div>
   <div class="form-group">
    <label for="phone" class="col-sm-2 control-label">Phone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="phone" name="phone">
    </div>
  </div>
   <div class="form-group">
    <label for="comment" class="col-sm-2 control-label">Comment</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="comment" name="comment" rows="5" placeholder="Any special request?"></textarea>
    </div>
  </div>
 
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Book Now</button>
      </div>
    </div>
  </div>
</div>
