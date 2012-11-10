<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Hauslife</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <style>

		/* GLOBAL STYLES
		-------------------------------------------------- */
		/* Padding below the footer and lighter body text */

		body {
		  padding-bottom: 40px;
		  color: #5a5a5a;
		}

		/* CUSTOMIZE THE NAVBAR
		-------------------------------------------------- */

		/* Special class on .container surrounding .navbar, used for positioning it into place. */
		.navbar-wrapper {
		  position: relative;
		  z-index: 10;
		  margin-top: 20px;
		  margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
		}

		/* Remove border and change up box shadow for more contrast */
		.navbar .navbar-inner {
		  border: 0;
		  -webkit-box-shadow: 0 2px 10px rgba(0,0,0,.25);
			 -moz-box-shadow: 0 2px 10px rgba(0,0,0,.25);
				  box-shadow: 0 2px 10px rgba(0,0,0,.25);
		}

		/* Downsize the brand/project name a bit */
		.navbar .brand {
		  padding: 14px 20px 16px; /* Increase vertical padding to match navbar links */
		  font-size: 16px;
		  font-weight: bold;
		  text-shadow: 0 -1px 0 rgba(0,0,0,.5);
		}

		/* Navbar links: increase padding for taller navbar */
		.navbar .nav > li > a {
		  padding: 15px 20px;
		}

		/* Offset the responsive button for proper vertical alignment */
		.navbar .btn-navbar {
		  margin-top: 10px;
		}

		/* CUSTOMIZE THE NAVBAR
		-------------------------------------------------- */

		/* Carousel base class */
		.carousel {
		  margin-bottom: 60px;
		}

		.carousel .container {
		  position: absolute;
		  right: 0;
		  bottom: 0;
		  left: 0;
		}

		.carousel-control {
		  background-color: transparent;
		  border: 0;
		  font-size: 120px;
		  margin-top: 0;
		  text-shadow: 0 1px 1px rgba(0,0,0,.4);
		}

		.carousel .item {
		  height: 500px;
		}
		.carousel img {
		  min-width: 100%;
		  height: 500px;
		}

		.carousel-caption {
		  background-color: transparent;
		  position: static;
		  max-width: 550px;
		  padding: 0 20px;
		  margin-bottom: 100px;
		}
		.carousel-caption h1,
		.carousel-caption .lead {
		  margin: 0;
		  line-height: 1.25;
		  color: #fff;
		  text-shadow: 0 1px 1px rgba(0,0,0,.4);
		}
		.carousel-caption .btn {
		  margin-top: 10px;
		}

		/* MARKETING CONTENT
		-------------------------------------------------- */
		/* Center align the text within the three columns below the carousel */
		.marketing .span4 {
		  text-align: center;
		}
		.marketing h2 {
		  font-weight: normal;
		}
		.marketing .span4 p {
		  margin-left: 10px;
		  margin-right: 10px;
		}

		/* Featurettes
		------------------------- */
		.featurette-divider {
		  margin: 80px 0; /* Space out the Bootstrap <hr> more */
		}
		.featurette {
		  padding-top: 120px; /* Vertically center images part 1: add padding above and below text. */
		  overflow: hidden; /* Vertically center images part 2: clear their floats. */
		}
		.featurette-image {
		  margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
		}

		/* Give some space on the sides of the floated elements so text doesn't run right into it. */
		.featurette-image.pull-left {
		  margin-right: 40px;
		}
		.featurette-image.pull-right {
		  margin-left: 40px;
		}

		/* Thin out the marketing headings */
		.featurette-heading {
		  font-size: 50px;
		  font-weight: 300;
		  line-height: 1;
		  letter-spacing: -1px;
		}

		/* RESPONSIVE CSS
		-------------------------------------------------- */
		@media (max-width: 979px) {
		  .container.navbar-wrapper {
			margin-bottom: 0;
			width: auto;
		  }
		  .navbar-inner {
			border-radius: 0;
			margin: -20px 0;
		  }

		  .carousel .item {
			height: 500px;
		  }
		  .carousel img {
			width: auto;
			height: 500px;
		  }

		  .featurette {
			height: auto;
			padding: 0;
		  }
		  .featurette-image.pull-left,
		  .featurette-image.pull-right {
			display: block;
			float: none;
			max-width: 40%;
			margin: 0 auto 20px;
		  }
		}

		@media (max-width: 767px) {

		  .navbar-inner {
			margin: -20px;
		  }
		  .carousel {
			margin-left: -20px;
			margin-right: -20px;
		  }
		  .carousel .container {
		  }
		  .carousel .item {
			height: 300px;
		  }
		  .carousel img {
			height: 300px;
		  }
		  .carousel-caption {
			width: 65%;
			padding: 0 70px;
			margin-bottom: 40px;
		  }
		  .carousel-caption h1 {
			font-size: 30px;
		  }
		  .carousel-caption .lead,
		  .carousel-caption .btn {
			font-size: 18px;
		  }
		  .marketing .span4 + .span4 {
			margin-top: 40px;
		  }
		  .featurette-heading {
			font-size: 30px;
		  }
		  .featurette .lead {
			font-size: 18px;
			line-height: 1.5;
		  }
		}
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="../bootstrap/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../bootstrap/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../bootstrap/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../bootstrap/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../bootstrap/ico/apple-touch-icon-57-precomposed.png">
  </head>

  <body>

    <!-- NAVBAR
    ================================================== -->
    <!-- Wrap the .navbar in .container to center it on the page and provide easy way to target it with .navbar-wrapper. -->
    <div class="container navbar-wrapper">

      <div class="navbar navbar-inverse">
        <div class="navbar-inner">
          <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Hauslife, Mucho m&aacute;s que una habitaci&oacute;n</a>
          <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
          <div class="nav-collapse collapse">
            
			<form class="navbar-form pull-right">
              <input class="span2" type="text" placeholder="Matr&iacute;cula">
              <input class="span2" type="password" placeholder="Contrase&ntilde;a">
              <button type="submit" class="btn">Entrar</button>
            </form>
          </div><!--/.nav-collapse -->
        </div><!-- /.navbar-inner -->
      </div><!-- /.navbar -->
    </div><!-- /.container -->

    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="../img/res/slide01.jpg" alt="Alberca en Residencias TEC	">
          <div class="container">
            <div class="carousel-caption">
              <h1>Residencias TEC</h1>
              <p class="lead">Diversi&oacute;n, fiesta y entretenimiento en un solo lugar.</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="../img/res/slide02.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>El mejor lugar para vivir.</h1>
              <p class="lead">Definitivamente, Residencias TEC te convina la dirversi&oacute;n y el entretenimiento para que los estudiantes sean los mejores del Campus. </p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="../img/res/slide03.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Los eventos m&aacute;s interesantes del ITESM</h1>
              <p class="lead">La integraci&oacute;n de los Residentes hace que siempre te sientas como en casa.</p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="span4">
          <img class="img-circle" src="../img/stud/1.jpg">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" src="../img/stud/2.jpg">
          <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
        <div class="span4">
          <img class="img-circle" src="../img/stud/3.jpg">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div><!-- /.span4 -->
      </div><!-- /.row -->

      <!-- FOOTER -->
      <footer>
        <p>&copy; 2012 Error 404, Corp. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->
	<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../bootstrap/js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap-transition.js"></script>
    <script src="../bootstrap/js/bootstrap-alert.js"></script>
    <script src="../bootstrap/js/bootstrap-modal.js"></script>
    <script src="../bootstrap/js/bootstrap-dropdown.js"></script>
    <script src="../bootstrap/js/bootstrap-scrollspy.js"></script>
    <script src="../bootstrap/js/bootstrap-tab.js"></script>
    <script src="../bootstrap/js/bootstrap-tooltip.js"></script>
    <script src="../bootstrap/js/bootstrap-popover.js"></script>
    <script src="../bootstrap/js/bootstrap-button.js"></script>
    <script src="../bootstrap/js/bootstrap-collapse.js"></script>
    <script src="../bootstrap/js/bootstrap-carousel.js"></script>
    <script src="../bootstrap/js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
  </body>
</html>
