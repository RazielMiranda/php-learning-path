<?php
	$mysqli = new mysqli('127.0.0.1', 'root', 'database@LOCAL', '');

	if ($mysqli->connect_error) {
	    die('Connect Error (' . $mysqli->connect_errno . ') '
	            . $mysqli->connect_error);
	}

include 'header.php';  
?>

  
<body>
      <?php require 'menu.php'?>
</body>


<?php 
	include 'footer.php'; 
	$mysqli->close();
?>