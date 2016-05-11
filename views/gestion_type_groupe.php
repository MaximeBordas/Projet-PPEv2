<div class="container-fluid">
<div class="col-md-8">    
    <h1>Gestion des types de groupes</h1>
</div>
<button type="button" class="btn btn-danger"><a class="logout" href="deconnexion.php">Déconnexion</a></button>
<div class="col-md-8">
    <div class="col-md-12 align-center">
        <label class="trigger btn btn-success" for="popup__1" onclick="changeActionForm('add_type_groupe.php');">Ajouter</label>
    </div>
    <?php TabTypeGrp();

    AddButBeg();?>
    </table>
    <input type="submit" value="Supprimer" class="btn btn-danger">
    </form>

    <button id="boutMod"class="btn btn-success" data-toggle="collapse" data-target="#collapse">Modifier</button>

<div id="collapse" class="col-md-12 collapse">    
    <h1>Modifications</h1>
    <h3>Etape 1° - Veuillez saisir le nom du type de groupe à modifier</h3>
    <form action="mod_type_groupe.php" method="POST">
        <input type="texte" name="groupName">
    <h3>Etape 2° - Veuillez saisir le nombre de points que vous souhaitez attribuer</h3>
        <input type="texte" name="newNumber" value=""><br>
        <br>
        <input type="submit"class="btn btn-success">
    </form>
</div>
    <?php AddButEnd(); ?>
</div>
</div>
