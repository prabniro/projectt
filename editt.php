<?php 
if(!empty($_POST)){
$conn = mysqli_connect('localhost','root','','online';
if(!$conn){
    die('Connection issue : '.mysqli_connect_error());
}
$sql ="UPDATE products set productid='$_POST[productid]',
                productname='$_POST[Productname]',
                description='$_POST[description]',
                price = '$_POST[price]';
            quantity  = '$_POST[quantity available]';
            productdescription = '$_POST[productdescription]';
                 where id=$_POST[id]";
      $result = mysqli_query($conn,$sql);
if($result){
    header("Location:products.php");
}else{
echo "Failed udpatig data" .mysqli_error($conn);
}
}
?>
