<?php  
     $errors = $restaurant->errors; 
     $verb = ( $restaurant->id ? "Edit" : "Add");
      if($restaurant->id){
      $submitAction = ".\?page=restaurant.update";
     } else {
      $submitAction = ".\?page=restaurant.store";
     }
    ?>
    <div class="container">
          <div class="col-xs-12">  
              <form id="restaurantcreate" action="<?= $submitAction; ?>" method="POST" class="form-horizontal" enctype="multipart/form-data">
                <?php if($restaurant->id): ?>
                 <input type="hidden" name='id' value="<?= $restaurant->id?>">
              <?php endif; ?>
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

                <div class="form-group <?php if($errors['poster']): ?> has-error <?php endif; ?>">
                  <label for="poster" class="col-sm-4 col-md-2 control-label">Poster Image </label>
                  <div class="col-sm-5 col-md-5">
                    <input type="file" class="form-control" id="poster" name="poster">
                  </div>
                  <?php if($restaurant->poster != ""): ?>
                    <div class="col-sm-1 col-md-1">
                      <img src="./img/poster/100h/<?= $restaurant->poster ?>" alt="image">
                    </div>
                    <div class="col-sm-2 col-md-2">
                      <div class="checkbox">
                        <label><input type="checkbox" name="removeImage" value="true">Remove Image</label>
                      </div>
                    </div>

                  <?php else: ?>
                    <div class="col-sm-2 col-md-2">
                      <p><small>No poster found for this restaurant</small></p>
                    </div>

                  <?php endif; ?>
                </div>

                 <div class="form-group <?php if($errors['tags']): ?> has-error <?php endif; ?>">
                  <label for="tags" class="col-sm-4 col-md-2 control-label">Cuisines</label>
                  <div class="col-sm-8 col-md-10">
                  <div id="tags" class="form-control">
                  <script type="text/javascript">
                   var inputTags = "<?= $restaurant->tags; ?>";
                   </script>
                   </div>
                  </div>
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
