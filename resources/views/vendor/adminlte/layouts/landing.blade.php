<!doctype html>


<!-- Mirrored from www.pxcreate.com/template/tasty/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Apr 2018 17:21:57 GMT -->
<head>
<meta charset="utf-8">
<title>Tasty - Recipes </title>
<meta name="description" content="Recipes Template, Food Template Recipes Blog Template, cooking, Food, chef, Responsive Template, html5 Template, html5, css3, jquery, responsive">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script src="js/html5.js"></script>
<link href='http://fonts.googleapis.com/css?family=Noticia+Text:400,400italic,700,700italic|Crete+Round:400,400italic|Lobster|Lobster+Two:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/style.css">
<link id="color" rel="stylesheet" href="css/color1.css">
<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<link rel="stylesheet" href="css/mediaelementplayer.min.css" />
<link href="colorbox/colorbox.html" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<!--Header Part Start-->
<header id="header" class="clearfix">
  <div class="headerstrip"><div class="spiral"></div></div>
  
  <div class="container clearfix">
    <a href="index-2.html" id="logo">
      <img src="images/logo.png" alt="Tasty Delicious Recipes">
    </a>
    <nav id="topnav">
      <ul>
        <li class="active">
          <a  href="index-2.html" data-description="Main Start page">Home</a>
        </li>
        <li>
          <a  href="index-2.html" data-description="Main Start page">Recipe Pages</a>
          <ul>
           <li><a href="receipelist.html">Recent Recipes List </a>
            </li>
            <li><a href="receipegrid.html">Recent Recipes Grid </a>
            </li>           
            <li><a href="receipelist2column.html">Recent Recipes 2 Column </a>
            </li>
            <li><a href="receipedetails.html">Recent Detail page </a>
            </li>
           
            <li><a href="author.html">Author page </a>
            </li>
          </ul>
           </li>
   
		
        <li>
          <a href="blog-list.html" data-description="Our Thought">Blog</a>
          <ul>
            <li><a href="blog-list.html">Blog list</a>
            </li>
            <li><a href="blog-single-gallery.html">Blog Single Gallery</a>
            </li>
            <li><a href="blog-single-image.html">Blog Single Image</a>
            </li>
            <li><a href="blog-single-slider.html">Blog Single Slider</a>
            </li>
          </ul>
        </li>
        <li>
          <a href="contact-us.html" data-description="Send enquiry here">Contact</a>
        </li>
      </ul>
    </nav>
  </div>
</header>
<!--<h1 class="topcontent">Tasty Delicious Recipes Template - <span>Responsive, Html5, CSS3, jquery</span></h1>-->
<!--Header Part End-->

<!--Slidr Part Start-->
<section id="flexslider" class="clearfix">
  <div class="flexslider">
    <ul class="slides">
      <li>
        <img src="images/sliderimg1.jpg" alt="" title="" />
        <p class="flex-caption">Top Recipes of the Day -<b> Tasty & Tasty Food Forever </b>
          <span class="second">
          <br>
          Chicken pulao since the 1500s. </span></p>
      </li>
      <li>
        <img src="images/sliderimg2.jpg" alt="" title="" />
        <p class="flex-caption">Award Winner Recipe -<b> of the Year </b>
          <span class="second">
          <br>
          Chicken pulao since the 1500s. </span></p>
      </li>
      <li>
        <img src="images/sliderimg1.jpg" alt="" title="" />
        <p class="flex-caption">Top Recipes of the Month -<b> Tasty & Tasty </b>
          <span class="second">
          <br>
         Chicken pulao since the 1500s. </span></p>
      </li>
      <li>
        <img src="images/sliderimg2.jpg" alt="" title="" />
        <p class="flex-caption">Top Recipes of the Month -<b> Tasty & Tasty </b>
          <span class="second">
          <br>
          Chicken pulao ver since the 1500s. </span></p>
      </li>
    </ul>
  </div>
</section>
<!--Slidr Part End-->
<!--Middle Part Start-->
<!--What's Hot Start-->
<section id="maincontainer" class="container clearfix">
  <h1 class="heading1">What's <span>Hot</span>
  </h1>
  <!-- options -->
  <section id="options" class="clearfix">
    <ul id="filters" class="option-set clearfix" data-option-key="filter">
      <li><a href="#filter" data-option-value="*" class="selected">Show All</a>
      </li>
      <li><a href="#filter" data-option-value=".Spicy">Spicy</a>
      </li>
      <li><a href="#filter" data-option-value=".Cocktails">Cocktails</a>
      </li>
      <li><a href="#filter" data-option-value=".Snacks">Snacks</a>
      </li>
      <li><a href="#filter" data-option-value=".Sea-Food">Sea Food</a>
      </li>
    </ul>
  </section>
  <!-- Recipea -->
  <div id="recipecontainer" class="clearfix recipecolumn3 recipesortable">
    <ul>
	 <?php $db=mysqli_connect("localhost","root","","admin");
	 $results = mysqli_query($db, "SELECT * FROM recipe"); ?> 
<?php while ($row = mysqli_fetch_array($results)) { ?>	
      <li class="element Cocktails Sea-Food">
        <a href="<?php echo $row['img']; ?>" class="fancyboxpopup"><img style="width:275px; height:275px; " src="<?php echo $row['img']; ?>" alt="" /></a>
        <div class="recipedetails">
          <a href="recipedetails.html" class="title"><?php echo $row['rname']; ?></a>
          <p>  <?php echo $row['rdetails']; ?> </p>
          <ul class="rate">
            <li class="on"></li>
            <li class="on"></li>
            <li class="on"></li>
            <li class="on"></li>
            <li class="off"></li>
          </ul>
          <a class="fr" href="recipedetail.html"><?php echo $row['time']; ?></a>
        </div>
      </li>
<?php } ?>
    </ul>
  </div>
  <!-- #container -->
  
</section>
<!--What's Hot End-->
<!--Latest Event start-->
<section id="middleline" class="clearfix">
  <div class="midlinebg">
    <div class="container">
     <!-- <div class="roungloog"><img src="images/roundimg.png" alt="" title=""></div>
      <h1 class="textpadding"> Latest Event Title will be appear here </h1>
      <div class="event">
        <span class="eventdate">Date : May 5, Time : 5:00 a.m.</span>
        <span class="eventdate">Location : Bangladesh</span>
        <p><strong>Chicken pulao </strong> Chicken pulao recipe with step by step photos – Flavored chicken rice cooked with mild 
	  Bangladeshi spices. A chicken pulao is mildly spiced and is not heavy like the chicken biryani. 
	  It is best to serve it with a good onion raita or a simple salan. There are so many ways a Indian pulao is made.
	  Some pulao recipes use coconut milk and some recipes use a good amount of fragrant spices
	  like i used to make this flavorful veg pulao. </p>
      </div>-->
    </div>
  </div>
</section>
<!--Latest Event End-->
<!--Middle container Start-->
<section  class="container clearfix">
  
  <!--leftpart-->
  <section class="mb20 leftpart">
    <article id="mostratedgallery" class="mb20 clearfix">
      <h1 class="heading1">Most Rated Recipe of the Month</h1>
      <div class="mostrated">
        <a   data-fancybox-group="mostratedgallery" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit." href="recipeimg/recipeimg1big.jpg"><img  src="recipeimg/recipeimg1big.jpg" alt="" title="" /></a>
        <a  data-fancybox-group="mostratedgallery" style="display:none" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit."  href="recipeimg/recipeimg2big.jpg"><img src="recipeimg/recipeimg2big.jpg" alt="" title="" /></a>
        <a  data-fancybox-group="mostratedgallery" style="display:none" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit."  href="recipeimg/recipeimg3big.jpg"><img src="recipeimg/recipeimg3big.jpg" alt="" title="" /></a>
      </div>
           <ul class="rate">
        <li class="on"></li>
        <li class="on"></li>
        <li class="on"></li>
        <li class="on"></li>
        <li class="on"></li>
      </ul>
      <br>
     <div class="widthcolumn3">
      <p><strong>Chicken pulao </strong> Chicken pulao recipe with step by step photos – Flavored chicken rice cooked with mild 
	  Bangladeshi spices. A chicken pulao is mildly spiced and is not heavy like the chicken biryani. 
	  It is best to serve it with a good onion raita or a simple salan. There are so many ways a Indian pulao is made.
	  Some pulao recipes use coconut milk and some recipes use a good amount of fragrant spices
	  like i used to make this flavorful veg pulao.  <br>  <br>  
	
<h2>To Marinate</h2>
250 grams chicken</br>
¾ tsp ginger garlic paste</br>
¼ to ½ tsp red chili powder</br>
Generous pinch of turmeric</br>
Salt as needed</br>
1 tsp oil (makes the chicken soft)</br>
1 tsp garam masala (optional)</br>
1 ½ to 2 tbsp. Curd / yogurt (if using coconut milk skip this)</br>


	 </p>      <a href="blog-single-gallery.html" class="linkbutton fr">Continue Reading >></a>
</div>
      
      <div class="receipedtailsnote">
             <h4 class="heading4 recipedetailtitle">Nutritional information</h4>
             <ul class="listoption3">
      <li> Chicken pulao :  <span class="bold">500 ml</span></li>
      <li>Chicken pulao :  <span class="bold">1000 ml</span></li>
      <li> Chicken pulao :  <span class="bold">200 ml</span></li>
      <li>Chicken pulao  :  <span class="bold">300 ml</span></li>
       <li> Chicken pulao :  <span class="bold">200 ml</span></li>
      <li> Chicken pulao  :  <span class="bold">300 ml</span></li>
    </ul>
             </div>
             <div class="clear"></div>
 
    </article>
  </section>
  <!--Sidebar start-->
  <aside class="blogright">
  <div class="sidecontainer">
    <h4 class="heading4">Search </h4>
    <input type="text" class="blogserach" onBlur="if(this.value=='')this.value='To search type and hit enter';" onFocus="if(this.value=='To search type and hit enter')this.value='';" value="To search type and hit enter">
    </div>
   <div class="sidecontainer"> 
    <h4 class="heading4">Archives</h4>
    <ul class="archieve">
      <li><a href="#">February 2018</a>
      </li>
      <li><a href="#">January 2018</a>
      </li>
      <li><a href="#">December 2017</a>
      </li>
      <li><a href="#">November 2017</a>
      </li>
      <li><a href="#">August 2017</a>
      </li>
      <li><a href="#">July 2017</a>
      </li>
    </ul>
    </div>
    <div class="sidecontainer">  
    <h4 class="heading4">Favourite Recipes</h4>
    <ul class="tabs">
      <li class="active">
        <a href="#tabdata1">Popular</a>
      </li>
      <li>
        <a href="#tabdata2">Recents</a>
      </li>
      <li>
        <a href="#tabdata3">Random</a>
      </li>
    </ul>
    <div class="tabs-container">
      <div class="tabdata" id="tabdata1">
        <div class="popular">
          <ul class="popular">
            <li><img src="images/recipethumb1.jpg" alt="">
              <a href="#" class="entrytitle">Best Recipe of the World...</a>
              <div class="entry-meta">
                <span class="published">May 5, 2018</span>
                <span class="meta-sep">·</span>
                <span class="comment-count"><a href="#">3 Comments</a>
                </span>
                <ul class="rate">
                  <li class="on"></li>
                  <li class="on"></li>
                  <li class="on"></li>
                  <li class="on"></li>
                  <li class="off"></li>
                </ul>
              </div>
            </li>
            <li><img src="images/recipethumb2.jpg" alt="">
              <a href="#" class="entrytitle">Chicken pulao...</a>
              <div class="entry-meta">
                <span class="published">May 5, 2018</span>
                <span class="meta-sep">·</span>
                <span class="comment-count"><a href="#">3 Comments</a>
                </span>
                <ul class="rate">
                  <li class="on"></li>
                  <li class="on"></li>
                  <li class="on"></li>
                  <li class="on"></li>
                  <li class="off"></li>
                </ul>
              </div>
            </li>
            <li><img src="images/recipethumb3.jpg" alt="">
              <a href="#" class="entrytitle">Chicken pulao ...</a>
              <div class="entry-meta">
                <span class="published">May 5, 2018</span>
                <span class="meta-sep">·</span>
                <span class="comment-count"><a href="#">3 Comments</a>
                </span>
                <ul class="rate">
                  <li class="on"></li>
                  <li class="on"></li>
                  <li class="on"></li>
                  <li class="on"></li>
                  <li class="off"></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="tabdata" id="tabdata2">
        <ul class="popular">
          <li><img src="images/recipethumb2.jpg" alt="">
            <a href="#" class="entrytitle">Chicken pulao ...</a>
            <div class="entry-meta">
              <span class="published">May 5, 2018</span>
              <span class="meta-sep">·</span>
              <span class="comment-count"><a href="#">3 Comments</a>
              </span>
              <ul class="rate">
                <li class="on"></li>
                <li class="on"></li>
                <li class="on"></li>
                <li class="on"></li>
                <li class="off"></li>
              </ul>
            </div>
          </li>
          <li><img src="images/recipethumb3.jpg" alt="">
            <a href="#" class="entrytitle">Chicken pulao...</a>
         
            <div class="entry-meta">
              <span class="published">May 5, 2018</span>
              <span class="meta-sep">·</span>
              <span class="comment-count"><a href="#">3 Comments</a>
              </span>
              <ul class="rate">
                <li class="on"></li>
                <li class="on"></li>
                <li class="on"></li>
                <li class="on"></li>
                <li class="off"></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
      <div class="tabdata" id="tabdata3">
        <ul class="popular">
          <li><img src="images/recipethumb1.jpg" alt="">
            <a href="#" class="entrytitle">Chicken pulao ...</a>
            <div class="entry-meta">
              <span class="published">May 5, 2018</span>
              <span class="meta-sep">·</span>
              <span class="comment-count"><a href="#">3 Comments</a>
              </span>
              <ul class="rate">
                <li class="on"></li>
                <li class="on"></li>
                <li class="on"></li>
                <li class="on"></li>
                <li class="off"></li>
              </ul>
            </div>
          </li>
          <li><img src="images/recipethumb1.jpg" alt="">
            <a href="#" class="entrytitle">Best Recipe of the World...</a>
            <div class="entry-meta">
              <span class="published">May 5, 2018</span>
              <span class="meta-sep">·</span>
              <span class="comment-count"><a href="#">3 Comments</a>
              </span>
              <ul class="rate">
                <li class="on"></li>
                <li class="on"></li>
                <li class="on"></li>
                <li class="on"></li>
                <li class="off"></li>
              </ul>
            </div>
          </li>
          <li><img src="images/recipethumb3.jpg" alt="">
            <a href="#" class="entrytitle">Chicken pulao ...</a>
            <div class="entry-meta">
              <span class="published">May 5, 2018</span>
              <span class="meta-sep">·</span>
              <span class="comment-count"><a href="#">3 Comments</a>
              </span>
              <ul class="rate">
                <li class="on"></li>
                <li class="on"></li>
                <li class="on"></li>
                <li class="on"></li>
                <li class="off"></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
    </div>
   
  </aside>
  <!--Sidebar end-->
</section>
<!--Middle container End-->

<!--Latest frob blog Start-->
<section id="lastestfromblog" class="container clearfix">
  <h2 class="titles">Latest From <span>Blog</span></h2>
  <div class="es-carousel-wrapper clearfix">
    <div class="es-carousel">
      <ul>
        <li>
          <a href="recipedetails.html">
            <img src="images/bigimg1.jpg" alt="" title="">
          </a>
          <a href="recipedetails.html">
            <h3> Blog Content</h3>
          </a>
          <span class="deatils">Chicken pulao  <b>by admin</b></span>
          <span class="date">April 24<br>
          2017</span>
          <span class="comment">22 post<br>
          Comments</span>
        </li>
        <li>
          <a href="blog-list.html">
            <img src="images/bigimg2.jpg" alt="" title="">
          </a>
          <a href="blog-list.html">
            <h3> Blog Content</h3>
          </a>
          <span class="deatils">Chicken pulao  <b>by admin</b></span>
          <span class="date">April 24<br>
          2017</span>
          <span class="comment">22 post<br>
          Comments</span>
        </li>
        <li>
          <a href="blog-list.html">
            <img src="images/bigimg3.jpg" alt="" title="">
          </a>
          <a href="blog-list.html">
            <h3> Blog Content</h3>
          </a>
          <span class="deatils">Chicken pulao  <b>by admin</b></span>
          <span class="date">April 24<br>
          2017</span>
          <span class="comment">22 post<br>
          Comments</span>
        </li>
        <li>
          <a href="blog-list.html">
            <img src="images/bigimg1.jpg" alt="" title="">
          </a>
          <a href="blog-list.html">
            <h3> Blog Content</h3>
          </a>
          <span class="deatils">Chicken pulao  <b>by admin</b></span>
          <span class="date">April 24<br>
          2017</span>
          <span class="comment">22 post<br>
          Comments</span>
        </li>
        <li>
          <a href="blog-list.html">
            <img src="images/bigimg2.jpg" alt="" title="">
          </a>
          <a href="blog-list.html">
            <h3> Blog Content</h3>
          </a>
          <span class="deatils">Chicken pulao  <b>by admin</b></span>
          <span class="date">April 24<br>
          2017</span>
          <span class="comment">22 post<br>
          Comments</span>
        </li>
        <li>
          <a href="blog-list.html">
            <img src="images/bigimg3.jpg" alt="" title="">
          </a>
          <a href="blog-list.html">
            <h3> Blog Content</h3>
          </a>
          <span class="deatils">Chicken pulao <b>by admin</b></span>
          <span class="date">April 24<br>
          2017</span>
          <span class="comment">22 post<br>
          Comments</span>
        </li>
        <li>
          <a href="blog-list.html">
            <img src="images/bigimg1.jpg" alt="" title="">
          </a>
          <a href="blog-list.html">
            <h3> Blog Content</h3>
          </a>
          <span class="deatils">Chicken pulao  <b>by admin</b></span>
          <span class="date">April 24<br>
          2017</span>
          <span class="comment">22 post<br>
          Comments</span>
        </li>
        <li>
          <a href="blog-list.html">
            <img src="images/bigimg2.jpg" alt="" title="">
          </a>
          <a href="blog-list.html">
            <h3> Blog Content</h3>
          </a>
          <span class="deatils">Chicken pulao  <b>by admin</b></span>
          <span class="date">April 24<br>
          2017</span>
          <span class="comment">22 post<br>
          Comments</span>
        </li>
      </ul>
    </div>
  </div>
</section>
<!--Latest frob blog End-->
<!--Middle Part End-->
<!--Footer Start-->
<footer id="footer" class="clearfix">
  <div class="footerbg clearfix">
    <ul class="footersection container">
      <li class="testimonial">
        <h4>Testimonial</h4>
        <p class="testi">
        Mohsina Akter Nahar<span>Chicken pulao  <br>
        C.E.O.</span>
      </li>
      <li class="links">
        <h4>Categories</h4>
        <ul>
          <li>
            <a  href="recipedetails.html">Spicy Food Special</a>
          </li>
          <li>
            <a href="#">Drinks</a>
          </li>
          <li>
            <a href="recipedetails.html">Snacks</a>
          </li>
          <li>
            <a href="recipedetails.html">Spicy Sea Food</a>
          </li>
          <li>
            <a href="recipedetails.html"> Tasty Special Food</a>
          </li>
        </ul>
      </li>
      <li class="twiitersection">
        <h4>Twitter</h4>
        <div id="twitter">
        </div>
      </li>
      
    </ul>
  </div>
  
  <!--Social links Start-->
  <section id="social" class="container">
    <div class="leftline">@2018 All images & icons are copyright to their owners.</div>
    <div id="footersocial">
      <a class="facebook" title="Facebook" href="#">Facebook</a>
      <a class="twitter" title="Twitter" href="#">Twitter</a>
      <a class="linkedin" title="Linkedin" href="#">Linkedin</a>
      <a class="blooger" title="Blogger" href="#">Blogger</a>
      <a class="rss" title="rss" href="#">rss</a>
      <a class="dig" title="Dig" href="#">Dig</a>
      <a class="googleplus" title="Googleplus" href="#">Googleplus</a>
      <a class="skype" title="Skype" href="#">Skype</a>
    </div>
  </section>
  <!--Social links End-->
  <!--Go to Top-->
  <a title="Go Top" id="gotop" href="#">&nbsp;</a>
</footer>
<!--Footer End-->

<!--Javascripts-->
<script src="js/jquery-latest.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
<script src="js/mediaelement-and-player.min.js"></script>
<script  type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="js/jquery.elastislide.js"></script>
<script type="text/javascript" src="js/jquery.tweet.js"></script><script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script  type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/jquery.gmap.js"></script>
<script src="js/jflickrfeed.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>

<!-- Mirrored from www.pxcreate.com/template/tasty/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Apr 2018 17:23:15 GMT -->
</html>