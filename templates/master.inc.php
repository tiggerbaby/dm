<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dining Mate</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <!-- Navigation -->


 <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <img src="img/dm.svg" id="logo">
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li<?php if ($page === "index"): ?> class="active" <?php endif ;?>><a href=".\">Home</a></li>
            <li<?php if ($page === "restaurants"): ?> class="active" <?php endif ;?>><a href=".\?page=restaurants">Restaurants</a></li>
            <li<?php if($page==="about"): ?> class="active" <?php endif ;?>><a href=".\?page=about">About Us</a></li>
         
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <li<?php if($page==="register"): ?> class="active"<?php endif ;?>><a href=".\?page=register">Sign Up<span class="sr-only">(current)</span></a></li>
            <li<?php if($page==="signin"): ?> class="active"<?php endif ;?>><a href=".\?page=signin">Sign In</a></li>          
          </ul>
        </div>
      </div>
    </nav>



<?php $this->content();?>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="text-center">
          <p>Join us on</p>    
          <a href="https://www.instagram.com/">
            <img src="img/ing.svg" alt="instagram logo" class="footerlink">
              </a>
                <a href="https://www.plus.google.com/">
                  <img src="img/googleplus.svg" alt="googleplus logo" class="footerlink">
                </a>
                 <a href="https://www.facebook.com/">
                    <img src="img/fb.svg" alt="facebook logo" class="footerlink">
                  </a>
                <a href="https://www.twitter.com/">
              <img src="img/twitter.svg" alt="twitter logo" class="footerlink">
            </a>
        </div>

        <hr>

         <ol class="breadcrumb pull-right">
          <li<?php if ($page === "index"): ?><?php endif ;?>><a href=".\">Home</a></li>
            <li<?php if ($page === "restaurants"): ?><?php endif ;?>><a href=".\?page=restaurants">Restaurants</a></li>
          <li<?php if($page==="about"): ?> <?php endif ;?>><a href=".\?page=about">About Us</a></li>
        </ol>

       <p class="pull-left"> ©2015 Dining Mate All Rights Reserved.</p>
    </div>  
  </div> 
</footer>





