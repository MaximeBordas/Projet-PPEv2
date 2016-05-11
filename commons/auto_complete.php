<?php
$base = new PDO('mysql:host=localhost;dbname=cross', 'root', '');
$sql_name = "SELECT utilisateur_prenom, utilisateur_nom FROM utilisateur LIMIT 40";
$req = $base->prepare($sql_name);
$req->execute();
$dataName = $req->fetchAll();
$req->closeCursor();
$dataName2=array();
foreach ($dataName as $value) {
    array_push($dataName2,"$value[utilisateur_prenom] $value[utilisateur_nom]");
}
echo json_encode($dataName2);
?>