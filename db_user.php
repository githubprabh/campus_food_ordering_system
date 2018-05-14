<?php
	$dbhost = 'localhost' ;
	$username = 'root' ;
	$password = '' ;
	$db = 'ead_project_sem_4' ;
	$connection=mysqli_connect("$dbhost" , "$username" , "$password" );
if(!$connection){
	die ("dtaa base connection failed" . mysqli_error());
}

$db_select =	mysqli_select_db($connection,$db);
	if(!$db_select){
	die ("data base selection failed" . mysqli_error());
}
	echo "connecetd tomy db";
?>
