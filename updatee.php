<?php
$id = !empty($_GET['id'])?$_GET['id']:'';

if($id) {
	$conn = mysqli_connect('localhost','root','','online');
	if(!$conn){
	die('Connection issue : '.mysqli_connect_error());
	}
	$sql ="SELECT * FROM products where id=$id";
	$result = mysqli_query($conn,$sql);
	if(!$result){
	die("Error in sql <br />");
	}
	$row = mysqli_fetch_assoc($result);
	if($row){
	?>
<form action="update.php" method="POST">
<input type="hidden" name="id" value="<?php echo $row['id'];?>">
productname : <input type="text" name="productname" value="<?php echo $row['productname'];?>"><br />
price : <input type="text" name="price" value="<?php echo $row['price'];?>"><br />
Quantity available:<input type="number" name="quantityavailable"value="<?php echo $row['Quantity available'];?>"><br />
produxt description: <input type="number" name="productdescription" value="<?php echo $row['produxt description'];?>"><br />
<input type="submit" value="Update">
</form>
	<?php
	}else{
	 die("id is invalid <br />");
	}
}else{
die("please provide id");
}

