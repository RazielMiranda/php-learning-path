<?php

	$mysqli = new mysqli('127.0.0.1', 'root', 'database@LOCAL', '');

	if ($mysqli->connect_error) {
	    die('Connect Error (' . $mysqli->connect_errno . ') '
	            . $mysqli->connect_error);
	}
	echo '<p>Connection OK '. $mysqli->host_info.'</p>';
	echo '<p>Server '.$mysqli->server_info.'</p>';
	$mysqli->close();

?>