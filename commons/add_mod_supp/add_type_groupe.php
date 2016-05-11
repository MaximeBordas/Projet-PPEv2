<?php
include '../db/connect.php';
$sql="INSERT INTO type_groupe (type_groupe_libelle, type_groupe_points) VALUES (:libelle, :points)";
$req=$base->prepare($sql);
$req->bindParam(':libelle',$_POST['libelle']);
$req->bindParam(':points',$_POST['points']);
$req->execute();
header('Location: ../../index.php?page=gestion_type_groupe');
?>