<?php include('config.php');

session_start();

if (isset($_SESSION['username'])) {
    header('Location: welcome.php');
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = 'SELECT * FROM `users` WHERE `username`="'.$username.'" AND `password`="'.$password.'"';
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header('Location: welcome.php');
    } else{
        echo "<script>alert(Ooops! Email or password is wrong!)</script>";
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Creative Login Page</title>
</head>

<body>
    <form action="" method="post" class="login-form">
        <h1>Login</h1>

        <div class="text">
            <input type="text" id="username" autocomplete="off" name="username" value="<?=@$username ?>">
            <span data-placeholder="Username"></span>
        </div>
        <div class="text">
            <input type="password" id="password" autocomplete="off" name="password" value="<?=@$_POST['password'] ?>">
            <span data-placeholder="Password"></span>
            <div class="button" onclick="showHidePassword()"></div>
        </div>
        <input type="submit" class="loginButton" value="Login" name="submit">


        <div class="bottom-text">
            Don't have account !? <a href="#">Sign Up</a>
        </div>
    </form>

    <script src="main.js"></script>
</body>

</html>