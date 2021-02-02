<?php

    session_start();

    if(isset($_SESSION["username"]) && $_SESSION["username"]== "admin"){
        echo "You are on panel";
        echo "<br>";
        echo "<a href='close_session.php'<button>Log out</button></a>";
    }else {
        echo "Invalid username or password";
        echo "<br>";
        echo "<a href='index.php'<button>Try again</button></a>";
    }
?>



<!-- echo "<script>alert('You cannot acces')</script>";
        $url = 'index.php';
        header('Location: '.$url);
        die(); -->