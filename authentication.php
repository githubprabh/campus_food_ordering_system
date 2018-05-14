<?php // working
	$dbhost = 'localhost' ;
	$username = 'root' ;
	$password = '' ;
	$db = 'ead_project_sem_4' ;
	$con=mysqli_connect("$dbhost" , "$username" , "$password" );
	$db_select =	mysqli_select_db($con,$db);
	if (isset($_POST["s1"]) ){
		$user_type = mysqli_real_escape_string($con, $_POST['user_type']);
		$password = mysqli_real_escape_string($con, $_POST['password']);
		$phone_num = mysqli_real_escape_string($con, $_POST['phone_num']);
		$select_user = "SELECT * FROM user WHERE user_type = '$user_type' AND password ='$password' AND phone_number = '$phone_num'";
		$run_user = mysqli_query($con,$select_user);
		$check_user = mysqli_num_rows($run_user);
		if(mysqli_num_rows($run_user)>0){
		if($user_type == 'customer'){
			header('location:customer_menu.php');
			
		}
		if($user_type == 'vendor'){
			
			header('location:index1.php');
		}
		
		}
		else {
		header('location:log_sign.html');
		echo "enter correct details";
	}
	
	}
	
?>	
	
