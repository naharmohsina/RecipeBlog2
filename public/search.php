<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie8">
  <![endif]-->
  <!--[if (gte IE 9)|!(IE)]>
  <!-->
    <html lang="en">
    <!--<![endif]-->
  
<!-- Mirrored from dev.munfactory.com/cookbook/recipes.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Apr 2018 20:45:43 GMT -->
<head>
    <meta charset="utf-8">
    <title>
     Blog<em>Of</em>Recipe
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"
      />
    <!-- Mobile Specific Metas -->
    <link rel="stylesheet" href="css/style.css">
    <!-- CSS Style -->
    <!-- Start JavaScript -->
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <!-- jQuery library 1.10.2 -->
    <script src="js/modernizr.js"></script>
    <!-- Modernizr -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- Magnific Popup -->
    <script defer src="js/jquery.flexslider.js"></script>
    <!-- Flex slider -->
    <script src="js/jquery.easing.js"></script>
    <!-- Optional FlexSlider Additions -->
    <script type="text/javascript" src="js/responsive-nav.min.js"></script>
    <!-- Responsive Navigation -->
    <script type="text/javascript" src="js/instafeed.min.js"></script>
    <!-- Instgram Feed -->
    <script src="js/custom.js"></script>
    <!-- Custom Js file for javascript in html -->
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="http://www.munfactory.com/">
    <link rel="apple-touch-icon" sizes="72x72" href="http://www.munfactory.com/">
    <link rel="apple-touch-icon" sizes="144x144" href="http://www.munfactory.com/">
  </head>
  <body>
    <div id="fb-root">
    </div>
    <script>
      (function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s);
      js.id = id;
      js.src = "../../connect.facebook.net/en_US/all.js#xfbml=1&appId=270693226405291";
      fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    <header>
      <div class="top-bar">
        <div class="container clearfix">
          <div class="row">
            <div class="col_1 col">
              <a href="#">Home</a>
              <a href="#">members</a>
              <a href="#">Artical</a>
              <a href="#">Contact</a>
            </div>
            <!-- End top links -->
            <div class="social col">
              <a href="www.twitter.com"><i class="icon-twitter"></i></a>
              <a href="www.facebook.com"><i class="icon-facebook"></i></a>
              <a href="www.instagram.com"><i class="icon-instagram"></i></a>
              <a href="wwwflicker.com"><i class="icon-flickr"></i></a>
              <a href="www.gmail.com"><i class="icon-email"></i></a>
            </div>
            <!-- End social icons -->
          </div>
        </div>
        <!-- End container -->
      </div>
      <!-- End top bar -->
      <div class="main-header">
        <div class="container clearfix">
          <div class="row">
            <div id="logo" class="col">
               <img src="images/logo.png" width="237" height="50" alt="CookBook - Recipe HTML Theme" /> 
            </div>
            <!-- End logo -->
           <!--  <div class="top-search col">
              <form method="post" class="searchform" action="/search.php" >
                <label for="s" class="assistive-text">
               Search
                </label>
                <input type="text" class="field" name="s" value="" id="s" placeholder="Search &hellip;"
                  />
                <input type="submit" class="submit button" name="submit" id="searchsubmit" value="Search"
                  />
              </form>
            </div>-->
            <!-- End top-search -->
          </div>
        </div>
      </div>
    </header>
    <!-- End Header -->
    <!-- End main header -->
    <div class="container clearfix">
      <div class="row">
        <div id="nav" class="col">
          <ul>
                       <li>
              <a href="recipes.html" class="active">Recipes<i class="nav-icon icon-food"></i></a>
            </li>
            <li>
              <a href="blog.html">Blog<i class="nav-icon icon-doc"></i></a>
            </li>
            <li>
              <a href="archives.html">Archives<i class="nav-icon icon-calendar"></i></a>
            </li>
            <li>
              <a href="contact.html">Contact<i class="nav-icon icon-mail"></i></a>
            </li>
          </ul>
        </div>
        <!-- End nav -->
      </div>
	   <?php
	   $connect = mysqli_connect("localhost", "root", "", "admin");
	   $view=$_GET['view'];
$query = "SELECT * FROM recipe where rname like '%$view%'";
$result = mysqli_query($connect, $query);
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <div class="row">
        <div id="primary" class="col">
          <div class="primary-content">
            <h2>
              Recipes
            </h2>
            <div class="post clearfix">
              <div class="post-thumbnail">
                <a href="'.$row["img"].'" class="image-link">
                <img src="'.$row["img"].'" title="Steak with Potatoes" alt="Steak with Potatoes">
                </a>
              </div>
              <div class="post-content">
                <h3 class="entry-title">
                  '.$row["rname"].'
                </h3>
                <a title="Continue Reading" class="continue-reading">
                '.$row["rdetails"].'
                </a>
               
              </div>
              <div class="post-meta">
                <div class="post-meta-item">
                  <em>Serves</em>
                  <div>
                    <i class="icon-user">
                    </i>
                    <span>
                    For Five
                    </span>
                  </div>
                </div>
                <div class="post-meta-item">
                  <em>Level</em>
                  <div>
                    <i class="icon-beaker">
                    </i>
                    <span>
                    Expert
                    </span>
                  </div>
                </div>
              </div>
            </div>
           </div>
         </div>
		  ';
     } ?>
    
      <div class="footer-down clearfix">
        <div class="container">
          <div class="copyright">
            Copyright © 2018
            <a href="#" title="CooBook Theme">CookBook Theme</a>
            . All rights reserved.
          </div>
          <div class="credit">
            Designed by
            <a href="shimublog@gmail.com" title="munfactory">RecipeBlog</a>
          </div>
        </div>
      </div>
	     </div>
        </div>
   
      <!-- End footer-down -->
    </div>
    <!-- End Footer -->
    <script type="text/javascript">
      var navigation = responsiveNav("#nav", {
        insert: "before"
      });
    </script>
  </body>

<!-- Mirrored from dev.munfactory.com/cookbook/recipes.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Apr 2018 20:46:01 GMT -->
</html>