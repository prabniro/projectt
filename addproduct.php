

<!DOCTYPE html>
<html lang="en">

<head>
    <title>add product</title>
</head>

<body>
        <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
        <label> Product Name</label>
                </td>
                <td>
        <input type="text" name="productname" placeholder="Enter product Name" required="required" /><br />
    </td>
</tr>
        <tr>
            <td>
        <label> Price</label>
            </td>
            <td>
        <input type="number" name="price" placeholder="Enter price" required="required" /><br />
    </td>
</tr>
        <tr>
            <td>
        <label> Quantity available</label>
        </td>
        <td>
        <input type="number" name="quantityavailable" placeholder="Enter quantity" required="required" /><br />
    </td>
</tr>
        <tr>
            <td>
        <label> Product description </label>
        </td>
        <td>
        <textarea name="productdescription" rows="4" cols="30" placeholder="add description here..." required="required"></textarea><br />
    </td>
</tr>
        <tr>
            <td>
        <label for="productimg">Product Image</label>
        </td><td>
        <input type="file" name="file" id="productimg">
    </td>
</tr>

        <tr>
            <td>
        <input type="Submit" name="submit" value="submit">
        <input type="reset" name="reset" value="reset">
    </td>
</tr>
      
    </form>
    <tr>
        <td>
    <a href="adminprofile.php"><button>Home</button></a>
</td>
</tr>
      
</table>
    </body>

</html>
