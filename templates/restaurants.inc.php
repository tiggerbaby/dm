
<div class="container">
	<div class="col-lg-8" id="searchBar">
        <div class="input-group input-group-lg">
       <!--   <span class="glyphicon glyphicon-search form-control-feedback"></span> -->
          <input type="text" class="form-control" placeholder="Restaurant name, location"/>
          <span class="input-group-btn">
            <button class="btn btn-info" type="button" id="searchButton">Search</button>
          </span>  
        </div>
      </div>
</div>

<div class="jumbotron">
<div class="container">
  <p<?php if($page==="restaurantsuggest"): ?> class="col-sm-12 text-danger" <?php endif ;?>
  <a href=".\?page=restaurantsuggest">
      Are we missing any restaurant? Suggest a place to include in Dining Mate here.</a>
      </p>
	</div>
</div>

 
