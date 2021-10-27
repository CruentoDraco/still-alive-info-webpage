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
	<link rel="icon" href="images/logo.svg">
	<link id="stylesheet" rel="stylesheet" href="main.css">
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
			require __DIR__ . '/views/404.php';
			break;*/
	}

?>
</head>
<body class="body">
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