<?php
include '../db/connect.php';
$sql="UPDATE point SET point_libelle = :libelle, point_nb_min = :min, point_nb_max = :max, point_situation = :situation WHERE point_id = :id";
$req=$base->prepare($sql);
$req->bindParam(':libelle',$_POST['libelle'],PDO::PARAM_INT);
$req->bindParam(':min',$_POST['min'],PDO::PARAM_INT);
$req->bindParam(':max',$_POST['max'],PDO::PARAM_INT);
$req->bindParam(':situation',$_POST['liste_localisation'],PDO::PARAM_STR);
$req->bindValue(':id',$_POST['id'],PDO::PARAM_INT);
$req->execute();
header('Location: ../../index.php?page=gestion_parcours');
?>