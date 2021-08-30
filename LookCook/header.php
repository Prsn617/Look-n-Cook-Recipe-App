<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=s, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/bmi.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/variable.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Look n Cook</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.php">
                <img src="./images/logo.png" alt="LooknCook Logo">
            </a>
            <span>Look n Cook</span>
        </div>
        <nav>
            <ul>
                <li><a href="bmi.php">BMI</a></li>
                <li><a href="#meal" class="all">Recipes</a></li>
            </ul>
        </nav>
        <div class="acc">
            <?php 
                if(isset($_SESSION["userid"])){
                    echo '
                        <form method="post">
                            <button name="log-out" class="logout">Log Out</button>
                        </form>';
                }
                else{
                    echo '
                        <a href="login.php"> Sign In </a>
                    ';
                }
            ?>
        </div>
    </header>