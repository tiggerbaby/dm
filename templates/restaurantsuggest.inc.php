 <div class="container">
   <h2> Suggest a restaurant</h2>
   <form class="form-horizontal" method="POST" action="./?page=restaurantsuggeststore">
    <div class="form-group <?php if($errors['restuanrt_name']): ?> has-error <?php endif; ?>">
      <label for="restaurantName" class="col-sm-2 control-label">Restaurant Name</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="restaurant_name" id="restaurantName" value="<?php echo $restaurant_name; ?>">
      <div class="help-block"><?php echo $errors['restaurant_name']; ?></div> 
      </div>
    </div>


<!-- <div class="form-group <?php if($errors['title']): ?> has-error <?php endif; ?>">
                
                    <label for="movietitle" class="col-sm-4 control-label">Movie Title</label>
                    <div class="col-sm-8">
                      <input class="form-control" id="movietitle" name="title" placeholder="Troll2 (1990)"
                      value="<?php echo $title; ?>">
                      <div class="help-block"><?php echo $errors['title']; ?></div> 
                        </div>
                  </div>-->

    
    <div class="form-group">
      <label for="address" class="col-sm-2 control-label">Restaurant Address</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="restaurant_address" id="address">
      </div>
    </div>

    <div class="form-group">
      <label for="restaurantPhone" class="col-sm-2 control-label">Restaurant Phone</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="restaurant_phone" id="restaurantPhone">
      </div>
    </div>
     
    <hr>
    <p class="text-danger"><small> Once the restuarnt information got confirmed, you will receive $5 coupon as a reward!</small></p>
    <div class="form-group">
      <label for="contactName" class="col-sm-2 control-label">Your Contact Name</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="contactName" id="contactName">
      </div>
    </div>

    <div class="form-group">
      <label for="contactEmail" class="col-sm-2 control-label">Your Email Address</label>
      <div class="col-sm-4">
      <label for="contactEmail" class="col-sm-2 control-label">Your Email Address</label>
        <input type="email" class="form-control" name="contactEmail" id="contactEmail">
      </div>
    </div>

    <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                      <div class="checkbox">
                        <label>
                          <input id="terms" name="terms" type="checkbox" 
                          <?php if($terms): ?>
                            checked
                          <?php endif; ?> value="yes"> I appcect the terms and conditions.
                        </label>
                      </div>
                    </div>
                  </div>
      
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-info">Add a restaurant</button>
      </div>
    </div>
  </form>
</div>


