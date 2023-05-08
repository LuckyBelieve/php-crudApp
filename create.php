<?php
include ("dbconn.php");

if(isset($_POST['add-user'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password =$_POST['password'];

    $query = "INSERT INTO admin (username,email,password) VALUES ('$username','$email',' $password')";

    $results = mysqli_query($connection, $query);
    // $results = $connection->query($query);
    if(!$results){
        echo "query failed".mysqli_error($connection);
    }
    else{
        header("location:index.php?message=student added successfully");
    }
}
?>