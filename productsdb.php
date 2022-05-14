<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../front/css/bootstrap.min.css">
    <link rel="stylesheet" href="../front/css/styles.css">
</head>
<body>
<?php
$sql = "INSERT into products(productid, productname ,price, quantityavailable,description)
VALUES('$_POST[productid]','$_POST[productname]','$_POST[price]','$_POST[quantityavailable]','$_POST[description]')";
$result=mysqli_query($con,$sql);
if($result){
   echo "<div class='alert alert-success' >product uploaded</div>";
} else{
    die("Error in connection " . mysqli_error($con));
}
}
}
?>