<?php function TabParcours() {
global $base;
$req= $base->query("SELECT * FROM point");
$data = $req->fetchAll();
$req->closeCursor();
?>
<table class="table">
        <tr>
            <td>Nom</td>
            <td>Minimum</td>
            <td>Maximum</td>
            <td>Modifier</td>
            <td>Archiver</td>
        <?php
        $i=1;
        foreach ($data as $value) {
            if ($value['archiver']==1) {
                $class="danger";
                $valInp="Activer";
                $color="green";
            }else {
                $class="success";
                $valInp="Archiver";
                $color="red";
            }
            echo "<form action='commons/add_mod_supp/archive_point.php' method='POST' id='search'>";
            echo "<input name='id' type='hidden' value='$value[point_id]'/>";
            echo "<input name='archi' type='hidden' value='$value[archiver]'/>";
            echo "<tr class='$class'>";
            echo "<td><a href=\"index.php?page=gestion_parcours&point=$value[point_id]\">$value[point_libelle]</a></td>";
            echo "<td>$value[point_nb_min]</td>";
            echo "<td>$value[point_nb_max]</td>";
            echo "<td><label class=\"trigger_mod\" id='modButt' for='popup__1' onclick=\"changeActionForm('mod_point.php');modPoint($value[point_id], '$value[point_libelle]', '$value[point_nb_min]', '$value[point_nb_max]', '$value[point_situation]')\">Modifier</label></td>";
            echo "<td><input type='submit' name='inp' id='arc$i' class='trigger_archiver' style='color:$color;' value='$valInp' onclick='changeArc(arc$i);'/></td>";
            echo "</tr>";
            echo "</form>";
            $i++;
        }
        ?>
    </table>
    <?php } ?>