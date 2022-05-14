<?php
    require "connectdb.php";
    $sql = "select aname,password from admin";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) >0){
        foreach($result as $row){
            extract($row);
            if($_POST['username']== strtolower($aname)  && $_POST['password']== $password){
                echo "Welcome $aname";
            } else{
                echo "Invalid username and password";
            }
        }
    }
?>