<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.php');
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome!</title>
    <style>
        body {
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: stretch;
            /* background: url('https://a-static.besthdwallpaper.com/java-programming-language-coding-wallpaper-2560x1600-17042_7.jpg'); */
            background: linear-gradient(120deg, rgba(0,0,0,0.6),rgba(255,0,0,0.6)), url('https://a-static.besthdwallpaper.com/java-programming-language-coding-wallpaper-2560x1600-17042_7.jpg') right no-repeat;;
            /* background-position: center; */
            /* background-repeat: no-repeat; */
            background-size: cover;
            overflow-x: hidden;
            position: relative;
        }

        body h1 {
            background-color: white;
            color: black;
            font-size: 10vw;
            /* Responsive font size */
            font-weight: bold;
            margin: 0 auto;
            /* Center the text container */
            padding: 10px;
            width: 50%;
            text-align: center;
            /* Center text */
            position: absolute;
            /* Position text */
            top: 50%;
            /* Position text in the middle */
            left: 50%;
            /* Position text in the middle */
            transform: translate(-50%, -50%);
            /* Position text in the middle */
            mix-blend-mode: screen;
            /* This makes the cutout text possible */
        }
    </style>
</head>

<body>
    <h1>Welcome <?= $_SESSION['username']?>!</h1>
    <a href="logout.php"><h6>Log Out</h6></a>
</body>

</html>