<?php
include '../db/connect.php';
$sql="UPDATE point SET archiver = :arch WHERE point_id = :id";
$req=$base->prepare($sql);
if ($_POST['archi']==1) {
    $req->bindValue(':arch', 0);
}
else {
    $req->bindValue(':arch', 1);
}
$req->bindParam(':id',$_POST['id'],PDO::PARAM_INT);
$req->execute();
header('Location: ../../index.php?page=gestion_parcours');
?>