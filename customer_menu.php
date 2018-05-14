<?php
include ('connect.php');

$sql="SELECT * FROM menu_card";
$result=$db->query($sql);
?>

<!DOCTYPE html>
<html>
<body>
<h1 align="center">MENU CARD</h1>
<table border="1" align="center" style="line-height:25px;">
<tr>
<th>ITEM_NAME</th>
<th>QUANTITY_AVAILABLE</th>
<th>SIZE</th>
<th>DESCRIPTION</th>
</tr>
<?php
if($result->num_rows > 0){
	while($row=$result->fetch_assoc()){
		?>
		<tr>
		<td><?php echo $row['item_name'];?></td>
		<td><?php echo $row['quantity_available'];?></td>
		<td><?php echo $row['size'];?></td>
		<td><?php echo $row['description'];?></td>
		<td>
			<a class="submit_btn" href="customer_menu.php?submit=<?php echo $row['id'];?>">Order now</a>
		</td>
		</tr>
	<?php
	}
}
else
{
	?>
	<tr>
	<th colspan="2">There is no data found.</th>
	</tr>
	<?php
}
?>
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
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container"> <p><a href="feedback_c.html" class="btn btn-info btn-lg">
          feedback
        </a>
      </p> 
    </div>
  </body>


</table>
</body>
</html>

