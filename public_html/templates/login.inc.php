<?php  
     $errors = $user->errors; 
 ?>
           
           <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
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