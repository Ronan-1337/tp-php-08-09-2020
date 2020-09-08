
<?php
	require_once 'Views/header.html';

	if (isset($_GET['url'])){
		$url = $_GET['url'];
		switch ($url) {
			case 'home':
				require_once 'Views/index.html';
				break;
			case 'conducteurs':
				require_once 'Controllers/ConducteurController.php';
				break;
			case 'vehicules':
				require_once 'Controllers/VehiculeController.php';
				break;
			case 'locations':
				require_once 'Controllers/LocationController.php';
				break;
		}
	}
	else{
		require_once 'Views/index.html';
	}
?>