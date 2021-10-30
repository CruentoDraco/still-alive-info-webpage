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
  	<title>Still Alive The Game</title>
	<link rel="icon" href="images/logo.png">
	<link id="stylesheet" rel="stylesheet" href="main.css">
</head>
<body class="body">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="/">
                <img
                    class="brand"
                    src="images/logo.png"
                    height="60"
                    alt=""
                    loading="lazy"
                />
            </a>
            <!-- Toggle button -->
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- Link -->
                    <li class="nav-item">
                        <a class="nav-link btn" href="/features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn" href="/news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn" href="/assets">Assets</a>
                    </li>                        
                </ul>
                <!-- Icons -->
                <ul class="navbar-nav d-flex flex-row me-1">
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="mailto:info@stillalivethegame.de"><i class="fas fa-envelope"></i></a>
                    </li>
                    <li class="nav-item me-3 me-lg-0">
                        <a class="nav-link" href="https://instagram.com/stillalivethegame" target="_blank"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Container wrapper -->
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
        		case '/features' :
		        	require __DIR__ . '/includes/features.html';
        			break;
        		case '/news' :
		        	require __DIR__ . '/includes/news.html';
        			break;
		        case '/assets' :
        			require __DIR__ . '/includes/assets.html';
		        	break;
                case '/datenschutz' :
                    require __DIR__ . '/includes/datenschutz.html';
                    break;
                case '/impressum' :
                    require __DIR__ . '/includes/impressum.html';
                    break;
        		default:
		        	http_response_code(404);
        			require __DIR__ . '/views/404.php';
		        	break;
        	}
        ?>
    </div>
    <footer class="text-center text-white">
        <!-- Copyright -->
        <div class="text-center text-dark p-3 footer" >
            © 2021 Copyright:
            <a class="text-dark" href="https://instagram.com/stillalivethegame">StillAliveTheGame</a>
            <br>
            <a class="text-dark" href="/datenschutz">Datenschutz</a>
            <a class="text-dark" href="/impressum">Impressum</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>
</html>