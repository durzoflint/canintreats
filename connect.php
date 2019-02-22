<?php
	$connect = mysqli_connect('localhost','canintre_canintr','vJfIX2sFPffA','canintre_database');
	if(!$connect)
	{
		echo "Error while connecting to Database:".mysqli_connect_errno($connect) ;
	}
	$db = mysqli_select_db($connect, 'canintre_database');
?>