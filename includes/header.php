<?php /* php to extract page name*/
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[2];
$first_part = basename($_SERVER['PHP_SELF'], ".php");

include('includes/db.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title><?php if($first_part!="index"){echo ucfirst($first_part) . ' | ';} ?>Bistro <?php if($first_part=="index"){echo " - good food instantly!";} ?></title><!-- Write the first part into title. -->

<!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Links -->
	<link rel="stylesheet" type="text/css" href="/bistro/css/main.css"><!-- Main CSS -->
	<link rel="stylesheet" type="text/css" href="/bistro/css/bootstrap.min.css"><!-- Bootstrap CSS -->
    <link rel="shortcut icon" type="image/png" href="/bistro/images/logo/favicon.png"/><!-- Link for favicon -->



<!-- Scripts -->
	<script src="/bistro/icons/friconix.js"></script><!-- Icons from friconix.com -->
	<script src="/bistro/js/jquery.js"></script><!-- jQuery JS -->
	<script src="/bistro/js/bootstrap.min.js"></script><!-- Bootstrap JS -->

</head>
<body>
<header><!-- Head part of the website -->
<nav class="navbar navbar-expand-md navbar-light"><!-- Navigation Bar -->
  <a href="/bistro/"><img src="/bistro/images/logo/logo.png" width="150"></a><!-- Logo -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav">
    <span class="navbar-toggler-icon"></span>
  </button><!-- Hamburger icon (visible in <768px devices) -->
  <div class="collapse navbar-collapse" id="nav"><!-- Navbar, the collapsible part -->
    <ul class="navbar-nav ml-auto"><!-- Navbar start -->
      <li class="nav-item <?php if ($first_part=="index") {echo "active"; } else  {echo "";} ?> mr-4"><!-- php for making the class active -->
        <a class="nav-link" href="/bistro/">Home</a>
      </li>
      <li class="dropdown menu-large nav-item"> <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Menu </a>
                    <ul class="dropdown-menu megamenu"><!-- Mega Menu -->
                    	<h1 class="text-center">Mega Menu</h1>
                        <div class="row">
                            <li class="col-md-3 dropdown-item"><!-- A column of Mega Menu -->
                                <ul><!-- List of items of the megamenu -->
                                    <li class="dropdown-header">Cuisine Cat 1</li>
                                    <li><a href="#">Cold Drink</a>
                                    </li>
                                    <li class="disabled"><a href="#">Beer</a>
                                    </li>
                                    <li><a href="#">Juice</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Cuisine Cat 2</li>
                                    <li><a href="#">Meat</a>
                                    </li>
                                    <li><a href="#">Sausage</a>
                                    </li>
                                    <li><a href="#">Choupsey</a>
                                    </li>
                                    <li><a href="#">Pan Parag</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="col-md-3 dropdown-item">
                                <ul>
                                    <li class="dropdown-header">Cuisine Cat 3</li>
                                    <li><a href="#">Chocolates</a>
                                    </li>
                                    <li><a href="#">Chow-chow</a>
                                    </li>
                                    <li><a href="#">Biscuit</a>
                                    </li>
                                    <li><a href="#">Dalmoth</a>
                                    </li>
                                    <li><a href="#">Chatpat</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Special Cuisine</li>
                                    <li><a href="#">Panipuri</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="col-md-3 dropdown-item">
                                <ul>
                                    <li class="dropdown-header">Cuisine Cat 4</li>
                                    <li><a href="#">Tharlak</a>
                                    </li>
                                    <li><a href="#">Thenduk</a>
                                    </li>
                                    <li><a href="#">Thukpa</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Cuisine Cat 5</li>
                                    <li><a href="#">Momo</a>
                                    </li>
                                    <li><a href="#">Chowmein</a>
                                    </li>
                                    <li><a href="#">Burger</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="col-md-3 dropdown-item">
                                <ul>
                                    <li class="dropdown-header"></li>
                                    <li><a href="#">Learn Bootstrap</a>
                                    </li>
                                    <li><a href="#">Buttons</a>
                                    </li>
                                    <li><a href="#">Text</a>
                                    </li>
                                    <li><a href="#">Non-nav links</a>
                                    </li>
                                    <li><a href="#">Component alignment</a>
                                    </li>
                                    <li><a href="#">Fixed to top</a>
                                    </li>
                                    <li><a href="#">Fixed to bottom</a>
                                    </li>
                                    <li><a href="#">Static top</a>
                                    </li>
                                    <li><a href="#">Inverted navbar</a>
                                    </li>
                                </ul>
                            </li>
                        </div>
                    </ul>
                </li>
      <li class="nav-item <?php if ($first_part=="services") {echo "active"; } else  {echo "";} ?> mr-4">
        <a class="nav-link" href="services">Services</a>
      </li>
      <li class="nav-item <?php if ($first_part=="about") {echo "active"; } else  {echo "";} ?> mr-4">
        <a class="nav-link" href="about">About</a>
      </li>
      <li class="nav-item mr-4 hidden-md">
      	<div class="input-group mb-2">
		  <input type="text" class="form-control" placeholder="What's on tastebud?">
		  <div class="input-group-append"><button type="button" class="btn btn-success"><i class="fi-xnsuxl-search"></i></button></span></div>
		</div>
      </li>
       </a>
    </ul>
  </div>
</nav>
</header>