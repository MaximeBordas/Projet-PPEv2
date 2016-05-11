<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="public/css/bootstrap.min.css">
        <link rel="stylesheet" href="public/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="public/css/easy-autocomplete.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/sweetalert2/1.4.1/sweetalert2.min.css">
        <link rel="stylesheet" href="public/css/style.css">
    </head>
<?php include 'commons/config.php'; 
if (!isset($_GET['page']) || $_GET['page']=="accueil") {?>
<body class="login_body">
    <?php }
    else {
        echo "<body>";
    } ?>