 <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> -->
        <h4 class="modal-title" id="signUpFormLabel">Booking!</h4>
      </div>
      <div class="modal-body">
        <form id="registerNewUser" action=".\?page=auth.store" method="POST"> 
          <div class="form-group <?php if($errors['username']): ?> has-error <?php endif; ?>">
              <label for="username" class="control-label">User Name*</label>
             <input class="form-control" id="username" name="username" 
                      value="<?php echo $user->username; ?>">
                      <div class="help-block"><?php echo $errors['username']; ?></div>
           </div>
            <div class="form-group">
              <label for="email" class="control-label">Email*</label>
              <input class="form-control" id="email" name="email" placeholder="example@example.com"
                      value="<?php echo $user->email; ?>">
                      <div class="help-block"><?php echo $errors['email']; ?></div>
            </div>
            <div class="form-group">
              <label for="password" class="control-label">Password*</label>
              <input type="password" class="form-control" id="password" name="password">
                    <div class="help-block"><?php echo $errors['password']; ?></div>
            </div>
             <div class="form-group">
              <label for="password2" class="control-label">Comfirm Password*</label>
              <input type="password" class="form-control" id="password2" name="password2">
                    <div class="help-block"><?php echo $errors['password2']; ?></div>
            </div>
          <div class="checkbox">
           <label>
            <input type="checkbox">I agree to the terms and conditions of Use and Privacy Policy.
           </label>
          <!--  In order to use our services, you must agree to Dm's Terms of Service. -->
         </div>
         <div class="modal-footer">
        <button type="submit" class="btn btn-danger">Create Account</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>