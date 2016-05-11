<?php
include '../db/connect.php';
$sql="UPDATE utilisateur SET utilisateur_type = :type, utilisateur_prenom = :prenom, utilisateur_nom = :nom, utilisateur_sexe = :sexe, utilisateur_date_naissance= :date, classe_id = :classe WHERE utilisateur_id = :id";
$req=$base->prepare($sql);
$req->bindParam(':type',$_POST['liste_type'],PDO::PARAM_INT);
$req->bindParam(':prenom',$_POST['prenom'],PDO::PARAM_STR);
$req->bindParam(':nom',$_POST['nom'],PDO::PARAM_STR);
$req->bindParam(':sexe',$_POST['liste_sexe'],PDO::PARAM_STR);
$req->bindParam(':date',$_POST['date'],PDO::PARAM_STR);
$req->bindParam(':classe',$_POST['liste_classe'],PDO::PARAM_INT);
$req->bindValue(':id',$_POST['id'],PDO::PARAM_INT);
$req->execute();
header('Location: ../../index.php?page=gestion_user');
?>