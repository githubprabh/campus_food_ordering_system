<?php 

	//connect to database
	session_start();
	$db = mysqli_connect('127.0.0.1', 'root', '', 'ead_project_sem_4');

	// initialize variables
	$id = 0;
	$item_name = "";
	$quantity_available = "";
	$size = "";
	$description = "";
	$edit_state=false;
	
	//if save button is pressed
	if (isset($_POST['save'])) {
		$item_name = $_POST['item_name'];
		$quantity_available = $_POST['quantity_available'];
		$size = $_POST['size'];
		$description = $_POST['description'];
		$query = "INSERT INTO menu_card (item_name,quantity_available,size,description) VALUES ('$item_name', '$quantity_available','$size','$description')"; 
		mysqli_query($db,$query);
		$_SESSION['msg']="address saved"; 
		header('location:index1.php');
	}
	
	//update records
	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$item_name = $_POST['item_name'];
		$quantity_available = $_POST['quantity_available'];
		$size = $_POST['size'];
		$description = $_POST['description'];
		
		mysqli_query($db, "UPDATE menu_card SET item_name='$item_name',quantity_available='$quantity_available',size='$size',description='$description' WHERE id=$id");
		$_SESSION['msg'] = "Address updated!"; 
		header('location:index1.php');
	}

	//delete records
	if (isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM menu_card WHERE id=$id");
		$_SESSION['msg'] = "Address deleted!"; 
		header('location:index1.php');
	}

	//retrieve records
	$results = mysqli_query($db, "SELECT * FROM menu_card");
?>
