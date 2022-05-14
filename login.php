<?php
    session_start();
?>
<?php
    require "connectdb.php";
    $sql = "select username,password from users";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) >0){
        foreach($result as $row){
            extract($row);
            if($_POST['username']== strtolower($username)  && $_POST['password']== $password){
                $_SESSION['username']= $username;
                header("location:profileuser.php");
            } else{
                echo "Invalid username and password";
            }
        }
    }
?>