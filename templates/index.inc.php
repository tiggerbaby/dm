<?php 
$title = "Home";
$page = "index";
include "master.inc.php";

function content(){
  ?>
<section class="container-fluid image-bg-fluid-height">
          <div class="row">
            <div class="col-lg-6" id="searchBar">
        <div class="input-group input-group-lg">
       <!--   <span class="glyphicon glyphicon-search form-control-feedback"></span> -->
          <input type="text" class="form-control" placeholder="Restaurant name, location"/>
          <span class="input-group-btn">
            <button class="btn btn-info" type="button" id="searchButton">Search</button>
          </span>
        </div>
      </div><!-- /.col-lg-6 -->

          </div>
                 

      </section>
<?php
}