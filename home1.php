<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: index.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Stars Combat</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css" /> 
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
		<link rel = "stylesheet" href = "style.css" />
		<link rel="stylesheet" href="main.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="https://kit..com/dbed6b6114.js"crossorigin="anonymous"></script>
		<link rel="icon" href="imafontawesomeges/logo.png" type="image/icon">
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>


  <body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Stars Combat</a>
			</div>
		</div>
	</nav>
	<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        Stars Combat
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="home.php" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="aboutus.php" class="nav-link px-2 link-dark">Aboutus</a></li>
        <li><a href="contact.php" class="nav-link px-2 link-dark">Contact</a></li>
        <li><a href="game1/index.php" class="nav-link px-2 link-dark">Game</a></li>
        <li><a href="chartjs/index.php" class="nav-link px-2 link-dark">Status</a></li>
        <li><a href="esport.php" class="nav-link px-2 link-dark">E-Sport</a></li>
		    <li><a href="rule.php" class="nav-link px-2 link-dark">Rule of game</a></li>
	    </ul>
    
      <div class="col-md-3 text-end">
       <!-- <button type="button" class="btn btn-outline-primary me-2" href="index.php?logout='1';">Logout</button>
        <button type="button" class="btn btn-primary">Sign-up</button>-->
        <ul class="dropdown-menu dropdown-menu-dark position-static d-grid gap-1 p-2 rounded-3 mx-0 border-0 shadow w-220px">
        <strong><?php echo $_SESSION['username']; ?></strong>
        <li><a class="dropdown-item rounded-2 active" href="#">Action</a></li>
        <li><a class="dropdown-item rounded-2" href="#">Another action</a></li>
        <li><a class="dropdown-item rounded-2" href="#">Something else here</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item rounded-2" href="#">Separated link</a></li>
        <li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i>Logout</a></li>
        </ul>
		
		
      </div>
    </header>
  </div>

  
	
				
				
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4" class=""></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
      <img src="img/a.jpg" style = "width:100%; height:550px;" />
        <div class="container">
          <div class="carousel-caption text-start"></div>
        </div>
      </div>
      
      <div class="carousel-item">
      <img src="img/b.jpg" style = "width:100%; height:550px;" />
        <div class="container">
          <div class="carousel-caption"></div>
        </div>
      </div>
      
      <div class="carousel-item">
      <img src="img/c.jpg" style = "width:100%; height:550px;" />
        <div class="container">
          <div class="carousel-caption text-end"></div>
        </div>
      </div>

      <div class="carousel-item">
      <img src="img/d.jpg" style = "width:100%; height:550px;" />
        <div class="container">
          <div class="carousel-caption text-end"></div>
        </div>
      </div>
    </div>
   
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">السابق</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden"></span>
    </button>
  </div>
		
	</div>
	<iframe width="560" height="315" src="https://www.youtube.com/embed/sDo5vuFqAGE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

  <?php include('footer.php'); ?>
	
		<script src="bootstrap/js/bootstrap.min.js"></script>
	
	
</body>
</html>