<div class="container-fluid">
<div class="col-md-8">    
    <h1>Gestion des types de groupes</h1>
</div>
<button type="button" class="btn btn-danger"><a class="logout" href="deconnexion.php">Déconnexion</a></button>
<div class="col-md-8">
    <div class="col-md-12 align-center">
        <label class="trigger btn btn-success" for="popup__1" onclick="changeActionForm('add_type_groupe.php');">Ajouter</label>
    </div>
    <?php TabTypeGrp();AddButBeg();?>
    <form action="mod_type_groupe.php" method="post" name="form_pop" id="form_pop">
        <div class="col-md-6">
            <input type="hidden" name="id" id="id_mod"/>
            <input type="text" name="libelle" placeholder="Nom du type de groupe *" class="input_cus_add" id="libelle_mod"/>
        </div>
        <div class="col-md-6">
            <input type="number" name="points" placeholder="Nombre de points associé*" class="input_cus_add" id="point_mod"/>
        </div>
    <button type="submit" class="but_cus">Valider</button>
    </form> 
    <?php AddButEnd(); ?>
</div>
</div>