<!DOCTYPE html>
<html lang="en">
<head>
    <title>add product</title>
</head>
<body>
<form action="" method="post">
       <label> Product Id</label> <input type="number" name="productid" placeholder="Enter product id" required=""/><br/>
       <label> Product Name</label><input type="text" name="product name" placeholder="Enter product Name" required=""/><br/>
       <label> Price</label> <input type="number" name="price" placeholder="Enter price" required=""/><br/>
       <label> Quantity available</label> <input type="number" name="quantity available" placeholder="Enter quantity" required=""/><br/>
       <label> Product description </label>
       <textarea name = "productdescription" rows="4" cols="30" placeholder="add description here..." required=""></textarea><br/>
    <input type="Submit" name="submit" value="submit">
    <input type="reset" name="reset" value="reset">
    </form>

    <?php
        if(isset($_POST['submit'])){
            $productid = $_POST['productid'];
            $productname = $_POST['productname'];
            $price = $_POST['price'];
            $quantity  = $_POST['quantity available'];
            $productdescription = $_POST['productdescription'];
            $submit = $_POST['submit'];
            $reset = $_POST['reset'];
            //validation
            if($quantityLength<1 ){
                echo "Quantity must be 1 or more";
            }
            if($price<1 ){
                echo "add price";
                }
            }
    ?>
</body>
</html>