<?php  
     $errors = $user->errors; 
 ?>
  <!--   <div class="row">
          <div class="col-xs-12">  
 -->          <!-- <div class="container">
                <div class="row">
                <h1>Please Sign In</h1>
                  <form id="registerNewUser" action=".\?page=auth.attempt" method="POST" class="form-horizontal">
              
               <?php if($error): ?>
                <div class="alert alert-danger" role="alert"><strong>Nope.</strong> No user by that email with that password was found. Check spelling and try again.</div>
               <?php endif; ?>

                <div class="form-group <?php if($errors['email']): ?> has-error <?php endif; ?>">
                    <label for="email" class="col-sm-4 col-md-2 control-label">Email Address*</label>
                    <div class="col-sm-8 col-md-6">
                      <input class="form-control" id="email" name="email" 
                      value="<?php echo $user->email; ?>">
                      <div class="help-block"><?php echo $errors['email']; ?></div>
                    </div>
                </div>

                <div class="form-group <?php if($errors['password']): ?> has-error <?php endif; ?>">
                  <label for="password" class="col-sm-4 col-md-2 control-label"> Password* </label>
                  <div class="col-sm-8 col-md-6">
                    <input type="password" class="form-control" id="password" name="password">
                    <div class="help-block"><?php echo $errors['password']; ?></div>
                  </div>
                </div>
                
                <div class="form-group">
                  <div class="col-sm-offset-4 col-sm-10 col-md-offset-2 col-md-10">
                    <button class="btn btn-success"><span class="glyphicon glyphicon-ok"></span> Sign In </button>
                  </div>
                </div>
              </form> 


                </div>
               
          </div> -->
           
           <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <h4 class="modal-title" id="signInFormLabel">Please Sign In</h4>
      </div>
      <div class="modal-body">
        <form id="registerNewUser" action=".\?page=auth.attempt" method="POST">
            

               <?php if($error): ?>
                <div class="alert alert-danger" role="alert"><strong>Nope.</strong> No user by that email with that password was found. Check spelling and try again.</div>
               <?php endif; ?>

            <div class="form-group <?php if($errors['email']): ?> has-error <?php endif; ?>">
              <label for="email" class="control-label">Email*</label>
               <input class="form-control" id="email" name="email" 
                      value="<?php echo htmlspecialchars($user->email); ?>">
                      <div class="help-block"><?php echo $errors['email']; ?></div>
            </div>
            <div class="form-group <?php if($errors['password']): ?> has-error <?php endif; ?>">
              <label for="password" class="control-label">Password*</label>
               <input type="password" class="form-control" id="password" name="password">
                    <div class="help-block"><?php echo htmlspecialchars($errors['password']); ?></div>
                  </div>
            </div>
             <div class="modal-footer">
        <button type="submit" class="btn btn-danger">Sign In</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
                 
         <!--  </div>
          </div> -->