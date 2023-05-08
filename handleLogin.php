<?php include("dbconn.php") ?>
<?php
if(isset($_POST['login'])){
    $username = $_POST['usename'];
    $email = $_POST['email'];
    $password =$_POST['password'];

     $query = "SELECT * FROM admin where email = '$email'";
     $result = mysqli_query($connection,$query);
     if(!$result){
        die("query failed".mysqli_error($connection));
    }else{
        $row = mysqli_fetch_assoc($result);
        $userPassword = $row['password'];
        if($userPassword == $password){
            header("location:index.php?message= user logged in successfully");
        }
        else{
            header("location:login.php?message=invalid email or password");
        }
        
     }
}
?>