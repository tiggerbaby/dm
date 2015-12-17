<?php
$errors=$restaurants->errors;
?>
 <div class="container">
   <h2> Suggest a restaurant</h2>
   <form class="form-horizontal" method="POST" action="./?page=restaurantsuggeststore">
    <div class="form-group <?php if($errors['restuanrt_name']): ?> has-error <?php endif; ?>">
      <label for="restaurantName" class="col-sm-2 control-label">Restaurant Name</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="restaurant_name" id="restaurantName" value="<?php echo $restaurants->restaurant_name; ?>">
      <div class="help-block"><?php echo $errors['restaurant_name']; ?></div> 
      </div>
    </div>



    
    <div class="form-group <?php if($errors['restuanrt_address']): ?> has-error <?php endif; ?>">
      <label for="address" class="col-sm-2 control-label">Restaurant Address</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="restaurant_address" id="address" value="<?php echo $restaurants->restaurant_address; ?>">
        <div class="help-block"><?php echo $errors['restaurant_address']; ?></div> 
      </div>
    </div>

    <div  class="form-group <?php if($errors['restuanrt_phone']): ?> has-error <?php endif; ?>">
      <label for="restaurantPhone" class="col-sm-2 control-label">Restaurant Phone</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="restaurant_phone" id="restaurantPhone" value="<?php echo $restaurants->restaurant_phone; ?>">
        <div class="help-block"><?php echo $errors['restaurant_phone']; ?></div>
      </div>
    </div>
     
   
    <p class="text-danger"><small> Once the restuarnt information got confirmed, you will receive $5 coupon as a reward!</small></p>
    <!-- <div  class="form-group <?php if($errors['contactName']): ?> has-error <?php endif; ?>">
      <label for="contactName" class="col-sm-2 control-label">Your Contact Name</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="contactName" id="contactName">
         <div class="help-block"><?php echo $errors['contactName']; ?></div>
      </div>
    </div>

    <div class="form-group <?php if($errors['contactEmail']): ?> has-error <?php endif; ?>">
      <label for="contactEmail" class="col-sm-2 control-label">Your Email Address</label>
      <div class="col-sm-4">
        <input type="email" class="form-control" name="contactEmail" id="contactEmail">
         <div class="help-block"><?php echo $errors['contactEmail']; ?></div>
      </div>
    </div> -->

   <!--  <div class="form-group">
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
                  </div> -->
      
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-info">Add a restaurant</button>
      </div>
    </div>
  </form>
</div>


