<?php
	session_start();
	$nombre = session_id();
	echo $nombre;

?>