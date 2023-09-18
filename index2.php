<?php 
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<title>Stars Combat</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
		<link rel="stylesheet" href="css/main.css">
		<script src="https://kit..com/dbed6b6114.js"crossorigin="anonymous"></script>
		<link rel="icon" href="imafontawesomeges/logo.png" type="image/icon">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
	</head>
<body>
	<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Stars Combat</a>
			</div>
		</div>
	</nav>	 
	<ul id = "menu">
		<li><a href = "index.php">หน้าแรก</a></li> |
		<li><a href = "aboutus.php">เกี่ยวกับเรา</a></li> |
		<li><a href = "contactus.php">ติดต่อ</a></li> |
		<li><a href = "gallery.php">แกลเลอรี่</a></li> |
		<li><a href = "esport.php">การแข่งขัน</a></li> |
		<li><a href = "rulesandregulation.php">กฎของเกม</a></li>
	</ul>
	<button onclick="document.location = 'login.php'">Login</button> 
	<div id="myCarousel" class="carousel slide container-fluid" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
		</ol>
		<div style = "margin:auto;" class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="img/a.jpg" style = "width:100%; height:550px;" />
			</div>
		
			<div class="item">
				<img src="img/b.jpg" style = "width:100%; height:550px;"  />
			</div>
		
			<div class="item">
				<img src="img/c.jpg" style = "width:100%; height:550px;" />
			</div>
		
			<div class="item">
				<img src="img/d.jpg" style = "width:100%; height:550px;" />
			</div>
			
			<div class="item">
				<img src="img/e.jpg" style = "width:100%; height:550px;" />
			</div>
			
			<div class="item">
				<img src="im/f.jpeg" style = "width:100%; height:550px;" />
			</div>
			
			<div class="item">
				<img src="images/g.png" style = "width:100%; height:550px;" />
			</div>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/sDo5vuFqAGE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			
		</div>
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>	
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		
	</div>




<footer class="footer">
            <div class="footer-container">
                <div>
                    <h2>About Us</h2>
                    <p>เว็บจำลองเกม</p>
                    <ul class="social-icons">
                        <li class="flex">
                            <a href="http://www.twitter.com/"class= "fa fa-twitter fa-2x"></a>
                        </li>
                        <li class="flex">
                            <a href="http://www.facebook.com/"class= "fa fa-facebook fa-2x"></a>
                        </li>
                        <li class="flex">
                            <a href="https://www.instagram.com/"class= "fa fa-instagram fa-2x"></a>
                        </li>

                    </ul>
                </div>

                <div>
                  
                </div>

                <div>
                    <h2>Address</h2>
                    <span>
                        <i class="fas fa-map-market-alt"></i>
                    </span> 
                    <p>701 ถ. ประชาอุทิศ แขวง สามเสนนอก เขตห้วยขวาง กรุงเทพมหานคร 10310</p>
                </div>

                <div>
                    <h2>Have a Question</h2>
                    <div class="contact-item">
                        
                    </div>

                    <div class="contact-item">
                        <span>
                            <i class="fas fa-phone-alt"></i>
                        </span> 
                        <span>
                            026869268
                        </span>
                    </div>

                    <div class="contact-item">
                        <span>
                            <i class="fas fa-envelope"></i>
                        </span> 
                        <span>
                            robotixar@gmail.com
                        </span>
                    </div>
                </div>

            </div>

        </footer>



    <script src="script.js"></script>
	
	<script src = "js/jquery.js"></script>
	<script src = "js/bootstrap.js"></script>	
</body>
</html>
