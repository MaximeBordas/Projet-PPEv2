<?php
include '../db/connect.php';
$sql="INSERT INTO point (point_libelle, point_nb_min, point_nb_max, point_situation) VALUES (:libelle, :min, :max, :situation)";
$req=$base->prepare($sql);
$req->bindParam(':libelle',$_POST['libelle'],PDO::PARAM_INT);
$req->bindParam(':min',$_POST['min'],PDO::PARAM_INT);
$req->bindParam(':max',$_POST['max'],PDO::PARAM_INT);
$req->bindParam(':situation',$_POST['liste_localisation'],PDO::PARAM_STR);
$req->execute();
header('Location: ../../index.php?page=gestion_parcours');
?>