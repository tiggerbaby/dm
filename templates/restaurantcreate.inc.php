<?php  
     $errors = $restaurant->errors; 
     $verb = ( $restaurant->id ? "Edit" : "Add");
    ?>
    <div class="container">
          <div class="col-xs-12">  
              <form id="restaurantcreate" action=".\?page=restaurant.store" method="POST" class="form-horizontal">
               <h3><?= $verb; ?> restaurant</h3>

                <div class="form-group <?php if($errors['title']): ?> has-error <?php endif; ?>">
                    <label for="title" class="col-sm-4 col-md-2 control-label">Restaurant Name</label>
                    <div class="col-sm-8 col-md-10">
                      <input class="form-control" id="title" name="title"
                       value="<?php echo $restaurant->title; ?>">
                      <div class="help-block"><?php echo $errors['title']; ?></div>
                    </div>
                </div>

                <div class="form-group <?php if($errors['discount']): ?> has-error <?php endif; ?>">
                  <label for="discount" class="col-sm-4 col-md-2 control-label">Discount </label>
                  <div class="col-sm-4 col-md-2">
                    <input type="discount" class="form-control" id="discount" name="discount" 
                    value="<?php echo $restaurant->discount; ?>">
                    <div class="help-block"><?php echo $errors['discount']; ?></div>
                  </div>
                </div>
                
                <div class="form-group <?php if($errors['address']): ?> has-error <?php endif; ?>">
                  <label for="address" class="col-sm-4 col-md-2 control-label">Address </label>
                  <div class="col-sm-8 col-md-10">
                    <input class="form-control" id="address" name="address" value="<?php echo $restaurant->address; ?>">
                    <div class="help-block"><?php echo $errors['address']; ?></div>
                  </div>
                </div>    
                 <div class="form-group <?php if($errors['phone']): ?> has-error <?php endif; ?>">
                  <label for="address" class="col-sm-4 col-md-2 control-label">Phone </label>
                  <div class="col-sm-8 col-md-10">
                    <input class="form-control" id="phone" name="phone" value="<?php echo $restaurant->phone; ?>">
                    <div class="help-block"><?php echo $errors['phone']; ?></div>
                  </div>
                </div>      
                <div class="form-group">
                  <div class="col-sm-offset-4 col-sm-10 col-md-offset-2 col-md-10">
                    <button class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> <?= $verb; ?> restaurant</button>
                  </div>
                </div>
              </form> 
              <?php if($restaurant->id): ?>
              <form action=".\?page=restaurant.destroy" method="POST" class="form-horizontal">
                <div class="form-group">
                  <div class="col-sm-offset-4 col-sm-10 col-md-offset-2 col-md-10">
                    <input type="hidden" name='id' value="<?= $restaurant->id?>">
                    <button class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete restaurant</button>
                  </div>
                </div>
              </form> 
              <?php endif; ?>  
            </div>
           </div>   
