<?php function TabTypeGrp() {

global $base;
$sql_type_groupe = "SELECT type_groupe_id, type_groupe_libelle, type_groupe_points FROM type_groupe";
$reqtypegroupe = $base->prepare($sql_type_groupe);
$reqtypegroupe->execute();
$data = $reqtypegroupe->fetchAll();
$reqtypegroupe->closeCursor();

?>
    <form action="commons/add_mod_supp/supp_type_groupe.php" method="POST">



    <table>
        <tr>
            <td><b>Type Groupe</b></td>
            <td><b>Nombres Points</b></td>
            <td><b>Supp</b></td>

        <?php
        foreach ($data as $value)
        {



            echo "<tr>";
            echo "<td contenteditable='true'>$value[type_groupe_libelle]</td>";
            echo "<td contenteditable='true'>$value[type_groupe_points]</td>";
            echo "<td class=\"no-padding\"><input class=\"full-content no-margin\" type=\"checkbox\" name=\"supp[]\" value=\"$value[type_groupe_id]\" /></td>";
            echo "</tr>";
        }
        ?>
    </table>
    <input type="submit" value="Supprimer" class="btn btn-danger">


    </form>
    <?php } ?>