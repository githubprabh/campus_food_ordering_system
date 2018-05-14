<?php  include('server.php'); 

	//fetch the record to be updated
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];
		$edit_state=true;
		$rec=mysqli_query($db,"SELECT * FROM menu_card WHERE id=$id");
		$record=mysqli_fetch_array($rec);
		$item_name=$record['item_name'];
		$quantity_available=$record['quantity_available'];
		$size=$record['size'];
		$description=$record['description'];
		$id=$record['id'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>MENU_CARD</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php if (isset($_SESSION['msg'])): ?>
		<div class="msg">
			<?php
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			?>
		</div>
	<?php endif ?>
	<table>
		<thead>
			<tr>
				<th>Item_name</th>
				<th>Quantity_available</th>
				<th>Size</th>
				<th>Description</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($row=mysqli_fetch_array($results)){ ?>
				<tr>
					<td><?php echo $row['item_name']; ?></td>
					<td><?php echo $row['quantity_available']; ?></td>
					<td><?php echo $row['size']; ?></td>
					<td><?php echo $row['description']; ?></td>
					<td>
						<a class="edit_btn" name= "update" href="index.php?edit=<?php echo $row['id'];?>">Edit</a>
					</td>
					<td>
						<a class="del_btn" name= "del" href="server.php?del=<?php echo $row['id'];?>">Delete</a>
					</td>	
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<form method="post" action="server.php" >
	<input type="hidden" name="id" value="<?php echo $id;?>">
		<div class="input-group">
			<label>Item_name</label>
			<input type="text" name="item_name" value="<?php echo $item_name;?>">
		</div>
		<div class="input-group">
			<label>Quantity_available</label>
			<input type="number_format" name="quantity_available" value="<?php echo $quantity_available;?>">
		</div>
		<div class="input-group">
			<label>Size</label>
			<input type="text" name="size" value="<?php echo $size;?>">
		</div>
		<div class="input-group">
			<label>Description</label>
			<input type="text" name="description" value="<?php echo $description;?>">
		</div>
		<div class="input-group">
		<?php if($edit_state == false):?>
			<button type="submit" name="save" class="btn">Save</button>
		<?php else: ?>	
			<button type="submit" name="update" class="btn">Update</button>
		<?php endif ?>
		</div>
	</form>
	<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container"> <p><a href="logout.php" class="btn btn-info btn-lg">
           Log out
        </a>
      </p> 
    </div>
  </body>
  
	
	
</body>
</html>
