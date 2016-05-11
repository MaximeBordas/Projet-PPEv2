<?php
function TabEleves() {
    global $base;
    $sql_user = "SELECT utilisateur_id, utilisateur_login, utilisateur_mdp, utilisateur_nom, utilisateur_prenom, utilisateur_type, utilisateur_date_naissance, utilisateur_sexe, utilisateur.classe_id, classe_libelle FROM utilisateur, classe WHERE utilisateur.classe_id = classe.classe_id";
    if (isset($_GET['liste_classe']) || isset($_GET['liste_sexe']) || isset($_GET['nom_eleve'])) {
        if ($_GET['liste_classe'] != "" || $_GET['liste_sexe'] != "" || $_GET['nom_eleve'] != "") {
            if ($_GET['liste_classe'] != "") {
                $sql_user .= " AND utilisateur.classe_id = $_GET[liste_classe]";
            }

            if ($_GET['liste_sexe'] != "") {
                $sql_user .= " AND utilisateur_sexe = '$_GET[liste_sexe]'";
            }

            if ($_GET['nom_eleve'] != "") {
                list($prenom,$nom)=explode(" ",$_GET['nom_eleve']);
                $sql_user .= " AND utilisateur_prenom = '$prenom' AND utilisateur_nom = '$nom'";
            }
        }
    }
    $sql_user .= " LIMIT 40";
    $req= $base->prepare($sql_user);
    $req->execute();

    $data = $req->fetchAll();
    $req->closeCursor();
    $reqprof = $base->prepare("SELECT utilisateur_nom FROM utilisateur WHERE utilisateur_type=1 OR utilisateur_type=2 AND classe_id = :classe");
    ?>

<form action="commons/add_mod_supp/supp_user.php" method="POST" onSubmit="if(!confirm('Voulez-vous vraiment supprimmer ses élèves?')){return false;}">
    <table>
        <tr>
            <td>Nom</td>
            <td>Prénom</td>
            <td>Type utilisateur</td>
            <td>Classe</td>
            <td>Professeur référent</td>
            <td>Sexe</td>
            <td>Supp</td>
        <?php
        foreach ($data as $value) {
            if ($value['utilisateur_type']==0) {
                $type_user="Elève";
            }elseif ($value['utilisateur_type']==1) {
                $type_user="Professeur";
            }elseif ($value['utilisateur_type']==2) {
                $type_user="Administrateur";
            }
            
            if ($value['utilisateur_sexe']=='h') {
                $sexe="Homme";
            }
            else {
                $sexe="Femme";
            }
            
            $reqprof->bindValue(':classe', $value['classe_id']);
            $reqprof->execute();
            $prof_nom = $reqprof->fetch();
            $reqprof->closeCursor();
            echo "<tr>";
            echo "<td>$value[utilisateur_nom]</td>";
            echo "<td>$value[utilisateur_prenom]</td>";
            echo "<td>$type_user</td>";
            echo "<td>$value[classe_libelle]</td>";
            echo "<td>M. $prof_nom[0]</td>";
            echo "<td>$sexe</td>";
            echo "<td class=\"no-padding\"><input class=\"full-content no-margin\" type=\"checkbox\" name=\"supp[]\" value=\"$value[utilisateur_id]\"/></td>";
            echo "<td><label class=\"trigger_mod\" id='modButt' for='popup__1' onclick=\"changeActionForm('mod_user.php');modUser($value[utilisateur_id], '$value[utilisateur_prenom]', '$value[utilisateur_nom]', '$value[classe_id]', '$value[utilisateur_sexe]', $value[utilisateur_type], $value[utilisateur_date_naissance], '$value[utilisateur_login]', '$value[utilisateur_mdp]');\">Modifier</label></td>";
            echo "</tr>";
        }    
        ?>
    </table>
    <input type="submit" value="Supprimer" class="btn btn-danger suppbut">
    </form>
<?php } ?>