<?php
include '../db/connect.php';
foreach ($_POST['supp'] as $value) {
    $sql_supp = "DELETE FROM utilisateur WHERE utilisateur_id = $value";
    echo $sql_supp;
    $supp = $base->prepare($sql_supp);
    $supp->execute();
}
header('Location: ../../index.php?page=gestion_user');
?>