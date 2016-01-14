<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Booking Form</h4>
      </div>
      <div class="modal-body">
      <?php if (static::$auth->check()): ?>
         <form method="POST" action="./?page=booking.create" class="form-horizontal">
              <!-- <input type="hidden" name="user_id" value="<?= $user->id ?>"> -->
              <input type="hidden" name="restaurant_id" value="<?= $restaurant->id ?>">

  <div class="form-group">
    <label for="date" class="col-sm-2 control-label"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span></label>
    <div class="col-sm-10">
      <input type="date" class="form-control <?php if ($bookingerrors['date']): ?> has-error <?php endif; ?>" id="date" name="date">
        <div class="help-block"><?= $bookingerrors['date']; ?></div>
    </div>
  </div>
  <div class="form-group">
    <label for="time" class="col-sm-2 control-label"><span class="glyphicon glyphicon-time" aria-hidden="true"></span></label>
    <div class="col-sm-10">
      <input type="time" class="form-control <?php if ($bookingerrors['time']): ?> has-error <?php endif; ?>" id="time" name="time">
       <div class="help-block"><?= $bookingerrors['time']; ?></div>
    </div>
  </div>
   <div class="form-group">
    <label for="people" class="col-sm-2 control-label"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></label>
    <div class="col-sm-3">
      <select class="form-control" name="people">
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
    <label for="name" class="col-sm-2 control-label">Contact Name*</label>
    <div class="col-sm-10">
      <input type="text" class="form-control <?php if ($bookingerrors['name']): ?> has-error <?php endif; ?>" id="name" name="name">
        <div class="help-block"><?= $bookingerrors['name']; ?></div>    
    </div>
  </div>
   <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email*</label>
    <div class="col-sm-10">
      <input type="email" class="form-control <?php if ($bookingerrors['email']): ?> has-error <?php endif; ?>" id="email" name="email" placeholder="example@example.com">
       <div class="help-block"><?= $bookingerrors['email']; ?></div>   
    </div>
  </div>
   <div class="form-group">
    <label for="phone" class="col-sm-2 control-label">Phone*</label>
    <div class="col-sm-10">
      <input type="text" class="form-control  <?php if ($bookingerrors['phone']): ?> has-error <?php endif; ?>" id="phone" name="phone">
       <div class="help-block"><?= $bookingerrors['phone']; ?></div>   
    </div>
  </div>
   <div class="form-group">
    <label for="comment" class="col-sm-2 control-label">Comment</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="comment" name="comment" rows="5" placeholder="Any special request?"></textarea>
    </div>
  </div>
   </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-info" data-toggle="modal" data-target="#bookingform" data-whatever="@mdo">Book Now</button>
          <?php else: ?>
            <p>You need to be <a href=".\?page=login">Sign in</a> to make a booking.</p>
             <button type="button" class="btn btn-primary" data-dismiss="modal">Got it</button>
          <?php endif; ?>
      </div>
</form>
      

    </div>
  </div>

</div>

