<?php function TabTypeGrp() {
    global $base;
$sql_type_groupe = "SELECT type_groupe_id, type_groupe_libelle, type_groupe_points, archiver FROM type_groupe";
$req= $base->prepare($sql_type_groupe);
$req->execute();
$data = $req->fetchAll();
$req->closeCursor();
?>
<table class="table">
        <tr>
            <td><b>Type Groupe</b></td>
            <td><b>Nombres Points</b></td>
            <td/>
            <td/>

        <?php
        $i=1;
        foreach ($data as $value)
        {
            if ($value['archiver']==1) {
                $class="danger";
                $valInp="Activer";
                $color="green";
            }else {
                $class="success";
                $valInp="Archiver";
                $color="red";
            }
            echo "<form action='commons/add_mod_supp/archive_type.php' method='POST' id='search'>";
            echo "<tr class='$class'>";
            echo "<input name='id' type='hidden' value='$value[type_groupe_id]'/>";
            echo "<input name='archi' type='hidden' value='$value[archiver]'/>";
            echo "<td>$value[type_groupe_libelle]</td>";
            echo "<td>$value[type_groupe_points]</td>";
            echo "<td><label class=\"trigger_mod\" id='modButt' for='popup__1' onclick=\"changeActionForm('mod_type_groupe.php');modType($value[type_groupe_id], '$value[type_groupe_libelle]', $value[type_groupe_points]);\">Modifier</label></td>";
            echo "<td><input type='submit' name='inp' id='arc$i' class='trigger_archiver' style='color:$color;' value='$valInp' onclick='changeArc(arc$i);'/></td>";
            echo "</tr>";
            echo "</form>";
        }
        ?>
    </table>
    <?php } ?>