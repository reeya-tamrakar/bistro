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
	<title><?php if($first_part!="index"){echo ucfirst($first_part) . ' | ';} ?>Bistro <?php if($first_part=="index"){echo " - good food instantly!";} ?>/* Write the first part into title. */</title>

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
	<script src="/bistro/js/mega-menu.js"></script><!-- Bootstrap JS -->

</head>
<body>
<header>
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
  <a href="index.php"><img src="/bistro/images/logo/logo.png" width="150"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="nav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item <?php if ($first_part=="index") {echo "active"; } else  {echo "";} ?> mr-4">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="dropdown menu-large nav-item"> <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Menu </a>
                    <ul class="dropdown-menu megamenu">
                    	<h1 class="text-center">Mega Menu</h1>
                        <div class="row">
                            <li class="col-md-3 dropdown-item">
                                <ul>
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
        <a class="nav-link" href="services.php">Services</a>
      </li>
      <li class="nav-item <?php if ($first_part=="about") {echo "active"; } else  {echo "";} ?> mr-4">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item mr-4 hidden-md">
      	<div class="input-group mb-2">
		  <input type="text" class="form-control" placeholder="What's on tastebud?">
		  <div class="input-group-append"><button type="button" class="btn btn-success"><i class="fi-xnsuxl-search"></i></button></span>
		  </div>
		</div>
      </li>
       </a>
    </ul>
  </div>
</nav>
</header>