<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#343a40" />
  <meta name="description" content="Still Alive ist ein Web Game im Stile alter Videspiele mit modernisiertem User Interface" />
  <meta property="og:title" content="Still Alive The Game" />
  <meta property="og:url" content="http://www.stillalivethegame.de/" />
  <meta property="og:image" content="images/logo.svg" />
  <meta property="og:description" content="Beschreibungstext" />
  <meta property="og:site_name" content="Still Alive The Game" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>  
  <script type="text/javascript" src="scripts/script.js"></script>
  	<title>Still Alive The Game</title>
	<link rel="icon" href="images/logo.png">
	<link id="stylesheet" rel="stylesheet" href="main.css">
</head>
<body class="body">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md" style="background-color: #888989">
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
            <img
                class="brand"
                src="images/logo.png"
                height="60"
                alt=""
                loading="lazy"
                style="border-radius: 50%;"
            />
          </a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar">
            <ul class="navbar-nav">
                <li id="Features" class="nav-item"><a href="/start" class="nav-link btn">Features</a></li>
                <li id="news" class="nav-item"><a href="/news" class="nav-link btn">News</a></li>
                <li id="assets" class="nav-item"><a href="/assets" class="nav-link btn">Assets</a></li>
            </ul>
            <!-- Icons -->
            <ul class="navbar-nav d-flex flex-row me-1">
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="mailto:info@stillalivethegame.de"><i class="fas fa-envelope"></i></a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" href="https://instagram.com/stillalivethegame"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar -->
    <div id="view">
        <?php
	        $request = $_SERVER['REQUEST_URI'];
	        switch ($request) {
		        case '/' :
    	    		require __DIR__ . '/includes/start.html';
    	    		break;
	        	case '' :
        			require __DIR__ . '/includes/start.html';
		        	break;
        		case '/.' :
		        	require __DIR__ . '/includes/start.html';
        			break;
        		case '/..' :
		        	require __DIR__ . '/includes/start.html';
        			break;
		        case '/...' :
        			require __DIR__ . '/includes/start.html';
		        	break;
        		default:
		        	/*http_response_code(404);
        			require __DIR__ . '/views/404.php';*/
		        	break;
        	}
        ?>
    </div>
    <footer class="text-center text-white" style="background-color: #959696;">
        <!-- Grid container -->
        <div class="container pt-4">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Instagram -->
                <a
                    class="btn btn-link btn-floating btn-lg text-dark m-1"
                    href="https://instagram.com/stillalivethegame"
                    role="button"
                    data-mdb-ripple-color="dark"
                >
                    <i class="fab fa-instagram"></i>
                </a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->
        <!-- Copyright -->
        <div class="text-center text-dark p-3" style="background-color: #888989">
            © 2021 Copyright:
            <a class="text-dark" href="https://instagram.com/stillalivethegame">StillAliveTheGame.de</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>
</html>