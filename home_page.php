<?php
    session_start();
    include_once('database/db_users.php');
    include_once('database/db_campus.php');
    $register_request = $_GET['action'];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
           <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/home_page.css">
        <title>Home page</title>
    </head>
    <body>
        <?php include_once('templates/home_page_tpl.php'); ?>
    </body>
</html>
