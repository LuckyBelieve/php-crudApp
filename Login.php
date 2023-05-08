<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Login form</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
    <h1 class="text-center p-2 bg-primary-subtle">student admin registaration</h1>
    <main>

        <form action="handleLogin.php" method="POST">
            <h1 class="text-center">login here</h1>
            <div class="form-group">
                <label for="username">username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="login" value="log In" class="btn btn-success my-2">
            </div>
        </form>
        <?php
            if(isset($_GET['message'])){
                echo "<h6 class='text-danger text-center'>".$_GET['message']."</h6>";
            };
        ?>
    </main>
    <?php include("footer.php") ?>
</body>
</html>