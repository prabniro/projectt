<?php 

$id = !empty($_GET['id'])?$_GET['id']:'';

if($id){
$con = mysqli_connect('localhost','root','','online');
if(!$con){
 die("Error in connection ". mysqli_connect_error());
}
$sql = "DELETE from products where id=$id";
$result = mysqli_query($con, $sql);
if($result){
	echo "data deleted successfully";
	header("Location:products.php");
}else{
echo "error in delete " . mysqli_error($con);
}
mysqli_close($con);
}
