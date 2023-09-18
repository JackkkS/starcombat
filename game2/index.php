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
		<link rel = "stylesheet" href = "/register/bootstrap/css/bootstrap.min.css" /> 
		<link rel = "stylesheet" type = "text/css" href = "/register/css/style.css" />
		<link rel = "stylesheet" href = "/register/style.css" />
		<link rel="stylesheet" href="/register/main.css">
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
        <li><a href="/register/home.php" class="nav-link px-2 link-secondary">Home</a></li>
        <li><a href="/register/aboutus.php" class="nav-link px-2 link-dark">Aboutus</a></li>
        <li><a href="/register/contact.php" class="nav-link px-2 link-dark">Contact</a></li>
        <li><a href="/register/lobby.php" class="nav-link px-2 link-dark">Game</a></li>
        <li><a href="/register/chartjs/index.php" class="nav-link px-2 link-dark">Status</a></li>
        <li><a href="/register/esport.php" class="nav-link px-2 link-dark">E-Sport</a></li>
		    <li><a href="/register/rule.php" class="nav-link px-2 link-dark">Rule of game</a></li>
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
      <li><a class="dropdown-item" href="/register/logout.php">Logout</a></li>
      <!-- <li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i>Logout</a></li> -->
    </ul>
    
      </div>
    </header>
  </div>
    
    <div id="unity-container" style="text-align:center"; class="unity-desktop">
      <canvas id="unity-canvas" width=960 height=600></canvas>
      <div id="unity-loading-bar">
        <div id="unity-logo"></div>
        <div id="unity-progress-bar-empty">
          <div id="unity-progress-bar-full"></div>
        </div>
      </div>
      <div id="unity-warning"> </div>
      <div id="unity-footer">
        <div id="unity-webgl-logo"></div>
        <div id="unity-fullscreen-button"></div>
        <strong><div id="unity-build-title">Mini Cowboy Runner</div></strong>
      </div>
    </div>
    <script>
      var container = document.querySelector("#unity-container");
      var canvas = document.querySelector("#unity-canvas");
      var loadingBar = document.querySelector("#unity-loading-bar");
      var progressBarFull = document.querySelector("#unity-progress-bar-full");
      var fullscreenButton = document.querySelector("#unity-fullscreen-button");
      var warningBanner = document.querySelector("#unity-warning");

      // Shows a temporary message banner/ribbon for a few seconds, or
      // a permanent error message on top of the canvas if type=='error'.
      // If type=='warning', a yellow highlight color is used.
      // Modify or remove this function to customize the visually presented
      // way that non-critical warnings and error messages are presented to the
      // user.
      function unityShowBanner(msg, type) {
        function updateBannerVisibility() {
          warningBanner.style.display = warningBanner.children.length ? 'block' : 'none';
        }
        var div = document.createElement('div');
        div.innerHTML = msg;
        warningBanner.appendChild(div);
        if (type == 'error') div.style = 'background: red; padding: 10px;';
        else {
          if (type == 'warning') div.style = 'background: yellow; padding: 10px;';
          setTimeout(function() {
            warningBanner.removeChild(div);
            updateBannerVisibility();
          }, 5000);
        }
        updateBannerVisibility();
      }

      var buildUrl = "Build";
      var loaderUrl = buildUrl + "/Cow.loader.js";
      var config = {
        dataUrl: buildUrl + "/Cow.data",
        frameworkUrl: buildUrl + "/Cow.framework.js",
        codeUrl: buildUrl + "/Cow.wasm",
        streamingAssetsUrl: "StreamingAssets",
        companyName: "TechSoft",
        productName: "Mini Cowboy Runner",
        productVersion: "1.0",
        showBanner: unityShowBanner,
      };

      // By default Unity keeps WebGL canvas render target size matched with
      // the DOM size of the canvas element (scaled by window.devicePixelRatio)
      // Set this to false if you want to decouple this synchronization from
      // happening inside the engine, and you would instead like to size up
      // the canvas DOM size and WebGL render target sizes yourself.
      // config.matchWebGLToCanvasSize = false;

      if (/iPhone|iPad|iPod|Android/i.test(navigator.userAgent)) {
        // Mobile device style: fill the whole browser client area with the game canvas:

        var meta = document.createElement('meta');
        meta.name = 'viewport';
        meta.content = 'width=device-width, height=device-height, initial-scale=1.0, user-scalable=no, shrink-to-fit=yes';
        document.getElementsByTagName('head')[0].appendChild(meta);
        container.className = "unity-mobile";
        canvas.className = "unity-mobile";

        // To lower canvas resolution on mobile devices to gain some
        // performance, uncomment the following line:
        // config.devicePixelRatio = 1;

        unityShowBanner('WebGL builds are not supported on mobile devices.');
      } else {
        // Desktop style: Render the game canvas in a window that can be maximized to fullscreen:

        canvas.style.width = "960px";
        canvas.style.height = "600px";
      }

      loadingBar.style.display = "block";

      var script = document.createElement("script");
      script.src = loaderUrl;
      script.onload = () => {
        createUnityInstance(canvas, config, (progress) => {
          progressBarFull.style.width = 100 * progress + "%";
        }).then((unityInstance) => {
          loadingBar.style.display = "none";
          fullscreenButton.onclick = () => {
            unityInstance.SetFullscreen(1);
          };
        }).catch((message) => {
          alert(message);
        });
      };
      document.body.appendChild(script);
    </script>
  </body>
</html>
