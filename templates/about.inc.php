<?php
$errors=$enqiry->errors;
?>

 <div class="jumbotron" id="aboutBackgroundColor">
      <div class="container">
        <h1>Who we are?</h1>
        <p>We pactionated with focus on food, we focus on restaurants! team aim for Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <p>
        <h3>Restauranteurs Join Us</h3>
       <p><a class="btn btn-danger btn-lg" href="#" role="button">Learn more &raquo;</a></p>
      </div>
    </div>

     <div class="container">
       
       <form class="form-horizontal"  method="POST" action="./?page=enqirystore">
   <div class="form-group <?php if($errors['name']): ?> has-error <?php endif; ?>">
    <label for="name" class="col-sm-2 control-label">Contact Name</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="name" id="name" value="<?php echo $enqiry->name; ?>">
      <div class="help-block"><?php echo $errors['name']; ?></div> 
    </div>
  </div>
    
 <div  class="form-group <?php if($errors['phone']): ?> has-error <?php endif; ?>">
      <label for="phone" class="col-sm-2 control-label">Contact Phone</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $enqiry->phone; ?>">
        <div class="help-block"><?php echo $errors['phone']; ?></div>
      </div>
    </div>
  
  <div class="form-group <?php if($errors['email']): ?> has-error <?php endif; ?>">
    <label for="email" class="col-sm-2 control-label">Contact Email</label>
    <div class="col-sm-4">
      <input type="email" class="form-control" name="email" id="email" value="<?php echo $enqiry->email; ?>">
       <div class="help-block"><?php echo $errors['email']; ?></div> 
    </div>
  </div>
  

  <div class="form-group <?php if($errors['restaurant']): ?> has-error <?php endif; ?>">
    <label for="restaurant" class="col-sm-2 control-label">Restaurant Name</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="restaurant" id="restaurant" value="<?php echo $enqiry->restaurant; ?>">
       <div class="help-block"><?php echo $errors['restaurant']; ?></div>     
    </div>
  </div>

  <div class="form-group <?php if($errors['address']): ?> has-error <?php endif; ?>">
    <label for="address" class="col-sm-2 control-label">Restaurant Address</label>
    <div class="col-sm-4">
      <input type="text" class="form-control" name="address" id="address" value="<?php echo $enqiry->address; ?>">
      <div class="help-block"><?php echo $errors['address']; ?></div>
    </div>
  </div>
  

   <div class="form-group">
    <label for="comment" class="col-sm-2 control-label">Comment</label>
    <div class="col-sm-4">
     <textarea class="form-control" name="comment" id="comment" rows="5" placeholder="Write us an optional message. Comments, questions..."></textarea>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <input type="hidden" name="modal" value="active">
      <button type="submit" class="btn btn-default" data-toggle="modal" data-target="#enqiryform" data-whatever="@mdo">Send to Dining Mate</button>
    </div>
  </div>
</form>
     </div>
       	 

    <div class="modal fade" id="enqiryform" tabindex="-1" role="dialog" aria-labelledby="enqiryformLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="enqiryformLabel">Thanks for contacting us!</h4>
          </div>
          <div class="modal-body">
            <p>We will be contact you soon.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info" data-dismiss="modal">Got it</button>
          </div>
        </div>
      </div>
    </div>


