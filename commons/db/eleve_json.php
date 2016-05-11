<?php
if(isset($_GET['classe_id'])) {
 
    $json = array();
    
    $id = htmlentities(intval($_GET['classe_id']));
    $requete = "SELECT utilisateur_id, utilisateur_prenom, utilisateur_nom FROM utilisateur WHERE utilisateur_type = 0 AND classe_id = ". $id;
     
    // connexion à la base de données
    try {
        $base = new PDO('mysql:host=localhost;dbname=cross', 'root', '');
    } catch(Exception $e) {
        exit('Impossible de se connecter à la base de données.');
    }
    // exécution de la requête
    $req = $base->prepare($requete);
    $req->execute();
    $dataName = $req->fetchAll();
    $req->closeCursor();
    $dataName2=array();
    foreach ($dataName as $value) {
        array_push($dataName2,"$value[utilisateur_prenom] $value[utilisateur_nom]");
    }
    echo json_encode($dataName2);
}
else {
    echo "erreur";
}
?>