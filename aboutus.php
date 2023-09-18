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
		<link rel = "stylesheet" href = "bootstrap/css/bootstrap.min.css" /> 
		<link rel = "stylesheet" type = "text/css" href = "css/style.css" />
		
		<link rel="stylesheet" href="main.css">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="https://kit..com/dbed6b6114.js"crossorigin="anonymous"></script>
		<script src="https://kit.fontawesome.com/dbed6b6114.js"crossorigin="anonymous"></script> 
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
        <li><a href="lobby.php" class="nav-link px-2 link-dark">Game</a></li>
		<li><a href="chartjs/index.php" class="nav-link px-2 link-dark">Status</a></li>
        <li><a href="esport.php" class="nav-link px-2 link-dark">E-Sport</a></li>
		<li><a href="rule.php" class="nav-link px-2 link-dark">Rule of game</a></li>
	  </ul>
    
    
      <div class="col-md-3 text-end">
       <!-- <button type="button" class="btn btn-outline-primary me-2" href="index.php?logout='1';">Logout</button>
        <button type="button" class="btn btn-primary">Sign-up</button>-->
		
		
	<div class="dropdown">
    </br>
      <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      <strong><?php echo $_SESSION['username']; ?></strong>
      </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="chartjs/index.php">Profile</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
      <li><a class="dropdown-item" href="logout.php">Logout</a></li>
      <!-- <li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i>Logout</a></li> -->
    </ul>
    </div>
		
      </div>
    </header>
  </div>
	<div style = "margin-left:0;" class = "container">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<strong><h3>เกี่ยวกับเรา</h3></strong>
				<p style = "position:relative; float:left; width:850px; margin:50px">
			Robotixar Academy
			<br>โรโบทิซาร์ อคาเดมี จัดการเรียน การสอน และ พัฒนาการศึกษา เกี่ยวกับ การสร้างหุ่นยนต์ และโคดดิ้ง ให้กับนักเรียน อายุ 3-18 ปี รวมถึงบุคลากรทางการศึกษา นักพัฒนาการศึกษา และโรงเรียน ทางสถาบันมีการจัดแคมป์ กิจกรรมทางการศึกษา เกี่ยวกับ วิทยาศาสตร์ เทคโนโลยี วิศวกรรมศาสตร์ คณิตศาสตร์ วิทยาการคำนวณ และโปรแกรม คอมพิวเตอร์ เราใช้มาตรฐาน ระดับสากล ที่เรียกว่า NGSS หรือ เน็กซ์เจอเนอเรชั่นซายน์แสตนดาร์ด มาเป็นแกนในการพัฒนาหลักสูตรที่ให้สอดคล้องกับหลักสูตรทั้งนานาชาติ และของประเทศ และยังนำทักษะของ 21st เซ็นเจอร์รี่ สกิล เข้ามามีส่วนร่วมอย่างมากในการประเมินผลด้านความพร้อมของนักเรียน การพัฒนาทักษะตรงนี้สำคัญอย่างมากในการดำรงชีวิต และการทำงานในยุคศตวรรษใหม่ ที่มี ทั้งหุ่นยนต์ เอไอ วิทยาการคอมพิวเตอร์และการคำนวณ มาเกี่ยวข้องมากมาย ทีมงานวิจัยการเรียนการสอน พัฒนาบทเรียน และ สื่อการสอน รวมทั้งของเล่นทางวิทยาศาสตร์และเทคโนโลยี โปรแกรมมิ่ง มีความเชี่ยวชาญและประสบการณ์อย่างสูงมาสิบกว่าปี รวมทั้งเรายังมีทีมวิศวกรและนักการศึกษาที่มาช่วยผลิตผลิตภัณฑ์ ทางด้านวิทยาการหุ่นยนต์ที่เป็นประโยชน์กับเด็กยุคใหม่ แห่งศตวรรษที่ 21</p>
			
			
				<img style = "float:right;" src = "img/about.jpg" width = "250px" height = "250px" />
				<br style = "clear:both;" />
				<br />
				<br />
				<hr style = "border:1px dotted #000;" />
				<br />
				
				
			</div>
		</div>
	</div>
	<br />
	<br />
	<div style = "text-align:right; margin-right:10px;" class = "navbar navbar-default navbar-fixed-bottom">
		
	</div>
</body>

<?php include('footer.php'); ?>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>


</html>