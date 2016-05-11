<?php
function ListeClasse() {
    global $base;
    $reqlisteclasse = $base->query("SELECT classe_id, classe_libelle FROM classe");
    $datalisteclasse = $reqlisteclasse->fetchAll();
    $reqlisteclasse->closeCursor();
    foreach($datalisteclasse as $value) 
        { 
            echo"<option value=\"$value[classe_id]\">$value[classe_libelle]</option>"; 
        }
}
?>