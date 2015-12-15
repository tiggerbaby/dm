 <div class="container">
   <h2> Suggest a restaurant</h2>
   <form class="form-horizontal" method="POST" action="./?page=restaurantsuggestsuccess">
    <div class="form-group">
      <label for="restaurantName" class="col-sm-2 control-label">Restaurant Name</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="restaurant_name" id="restaurantName">
      </div>
    </div>
    
    <div class="form-group">
      <label for="address" class="col-sm-2 control-label">Restaurant Address</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="restaurant_address" id="address">
      </div>
    </div>

    <div class="form-group">
      <label for="restaurantPhone" class="col-sm-2 control-label">Phone</label>
      <div class="col-sm-4">
        <input type="text" class="form-control" name="restaurant_phone" id="restaurantPhone">
      </div>
    </div>

    <div class="form-group">
      <label for="email" class="col-sm-2 control-label">Your Email Address</label>
      <div class="col-sm-4">
        <input type="email" class="form-control" name="email" id="email">
      </div>
    </div>
    
    
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-info">Add a restaurant</button>
      </div>
    </div>
  </form>
</div>


