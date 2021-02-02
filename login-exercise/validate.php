<?php

    session_start();

    $user = "admin";
    $password = "1234";

    if($_POST["username"]==$user && $_POST["password"]==$password){
        $_SESSION["username"] = $user;
        
    }
    $url = 'panel.php';
    header('Location: '.$url);
    die();

?>


<!-- if(isset($_SESSION["username"])){
        if($_POST["username"]==$user && $_POST["password"]==$password){
            $_SESSION["username"] = $user;

            echo "Welcome ".$_SESSION["username"].", you can acces to the panel: ";
            echo "<a href='panel.php'>Panel</a>";
        }else {
            echo "<script>alert('You cannot acces')</script>";
        }
    }else {
        echo "sorry bro";
    } -->