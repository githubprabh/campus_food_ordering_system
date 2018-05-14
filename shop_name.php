<?php
if(isset($_POST)["s4"])
{
	$conn = mysqli_connect("localhost","root","","user");
	$query = "INSERT INTO user(user_type) VALUES ('".$_POST["insert"]."')";
	$result = mysqli_query($conn,$query );
	echo "done success";
}
?>
