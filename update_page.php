<?php include("header.php");?>
<?php include("dbconn.php");?>
<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];

    $query = "select * from `admin` WHERE `admin_id`=$id";
    $result = mysqli_query($connection,$query);
    if(!$result){
        echo "query failed".mysqli_error($connection);
    }
    else{
        $row = mysqli_fetch_assoc($result);
    }
}
?>
<?php
if(isset($_POST['update_button'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password =$_POST['password'];  

    $query = "UPDATE admin set username='$username',email='$email',password='$password' where admin_id=$id";
    $result = mysqli_query($connection,$query);
    if(!$result){
        echo "query failed".mysqli_error($connection);
    }else{
        header('location:index.php?message=updated successfully');
    }
}
?>

    <div class="container">
    <form action="update_page.php?id=<?php echo $id; ?>" method="POST">
        <div class="form-group">
            <label for="username">username</label>
            <input type="text" name="username" class="form-control" value="<?php echo $row['username'] ?>" required>
        </div>
        <div class="form-group">
            <label for="email">email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $row['email'] ?>" required>
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" name="password" class="form-control" value="<?php echo $row['password'] ?>" required>
        </div>
        <input type="submit" name="update_button" value="update" class="btn btn-success my-2">
    </form>
    </div>

<?php include("footer.php");?>