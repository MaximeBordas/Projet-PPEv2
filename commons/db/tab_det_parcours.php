<?php function TabDetParcours($point) {
global $base;
$req=$base->prepare("SELECT utilisateur_nom, utilisateur_prenom FROM utilisateur WHERE point_id = :id_point");
$req->bindParam(':id_point',$_GET['point']);
$req->execute();
$data=$req->fetchAll();
$req->closeCursor();
$reqDet=$base->prepare("SELECT point_libelle, point_situation, point_nb_min, point_nb_max FROM point WHERE point_id = :id_point");
$reqDet->bindParam(':id_point',$_GET['point']);
$reqDet->execute();
$dataDet=$reqDet->fetch();
$reqDet->closeCursor();
 ?>

<div class="col-md-12 text-center">
    <h1><?php echo strtoupper($dataDet[0]); ?></h1>
</div>
<div class="col-md-4">
    <h4><b>Distance :</b> <?php echo $dataDet[1]; ?></h4>
</div>
<div class="col-md-4">
    <h4><b>Nombre minimum : </b> <?php echo $dataDet[2]; ?></h4>
</div>
<div class="col-md-4">
    <h4><b>Nombre maximum : </b> <?php echo $dataDet[3]; ?></h4>
</div>

<table>
    <tr>
        <td>Nom</td>
        <td>Prénom</td>
    </tr>
<?php foreach ($data as $value) {
    echo "<td>$value[utilisateur_nom]</td>";
    echo "<td>$value[utilisateur_prenom]</td>";
} ?>

</table>

<?php } ?>