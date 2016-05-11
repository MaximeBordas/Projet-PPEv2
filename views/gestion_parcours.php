<div class="container-fluid">
<div class="col-md-8">    
    <h1>Gestion du parcours</h1>
</div>
<button type="button" class="btn btn-danger"><a class="logout" href="deconnexion.php">Déconnexion</a></button>
<div class="col-md-8">
    <?php 
    if (isset($_GET['point'])) {
        TabDetParcours($_GET['point']);
    }
    else { ?>
        <div class="col-md-12 align-center">
        <label class="trigger btn btn-success" for="popup__1" onclick="changeActionForm('add_point.php');">Ajouter</label>
        </div>
    <?php TabParcours();
    }
    AddButBeg();?>
    <form action="mod_point.php" method="post" name="form_pop" id="form_pop">
        <div class="col-md-6">
            <input type="hidden" name="id" id="id_mod"/>
            <input type="text" name="libelle" placeholder="Nom*" class="input_cus_add" id="libelle_mod" value=""/>
            <input type="number" name="min" placeholder="Nombre minimum" class="input_cus_add"  id="min_mod"/>
        </div>
        <div class="col-md-6">
            <select name="liste_localisation" class="input_cus_add"  id="loca_mod">
                <option value="">Situation</option>
                <option value="proche">Proche</option>
                <option value="éloigner">Eloigner</option>
            </select>
            <input type="number" name="max" placeholder="Nombre minimum" class="input_cus_add"  id="max_mod"/>
        </div>
    <button class="but_cus">Valider</button>
    </form>
    <?php AddButEnd(); ?>
</div>
