<?php
include '../db/connect.php';
$sql = "UPDATE `type_groupe` SET `type_groupe_points` = :points , `type_groupe`.`type_groupe_libelle` = :libelle WHERE type_groupe_id = :id";
$req=$base->prepare($sql);
$req->bindParam(':id',$_POST['id'],PDO::PARAM_INT);
$req->bindParam(':libelle',$_POST['nom'],PDO::PARAM_STR);
$req->bindParam(':points',$_POST['point'],PDO::PARAM_INT);
$req->execute();
header('Location: ../../index.php?page=gestion_type_groupe');
?>