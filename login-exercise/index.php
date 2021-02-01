<?php

    session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-exercise-with-PHP</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <form method="post" action="validate.php">
        <input type="text" name="username" placeholder="Your user name">
        <input type="password" name="password" placeholder="Your password">
        <input type="submit" value="Log in">
    </form>
</body>
</html>