<div class="container-fluid">
<div class="col-md-8">    
    <h1>Gestion des utilisateurs</h1>
</div>
<button type="button" class="btn btn-danger"><a class="logout" href="deconnexion.php">Déconnexion</a></button>
<div class="col-md-8">
    
    <form method="GET" action="index.php" id="search">
        <input type="hidden" name="page" value="<?php echo $_GET['page']; ?>"/>
        <div class="col-md-4">
            <input type="text" name="nom_eleve" placeholder="Entrez le nom d'un élève" class="input_cus" id="recherche" onchange="submitSearch()"/>
        </div>
        <div class="col-md-4">
            <select name="liste_classe" class="input_cus" onchange="submitSearch()">
                <option value="">Classe</option>
                <?php ListeClasse();?>
            </select>
        </div>
        <div class="col-md-4">
            <select name="liste_sexe" class="input_cus" onchange="submitSearch()">
                <option value="">Sexe</option>
                <option value="h">Homme</option>
                <option value="f">Femme</option>
            </select>
        </div>
        </form>
        <div class="col-md-12 text-center">
            <label class="trigger btn btn-success" for="popup__1" onclick="changeActionForm('add_user.php');">Ajouter</label>
        </div>
        <?php TabEleves();
        
        AddButBeg(); ?>
        <form action="mod_user.php" method="post" name="form_pop" id="form_pop">
            <div class="col-md-6">
                <input type="hidden" name="id" id="id_mod"/>
                <input type="text" name="nom" placeholder="Nom*" class="input_cus_add" id="nom_mod" value=""/>
                <select name="liste_classe" class="input_cus_add"  id="classe_mod">
                    <option value="">Classe</option>
                    <?php ListeClasse(); ?>
                </select>
                <select name="liste_type" class="input_cus_add"  id="type_mod">
                    <option value="">Type</option>
                    <option value="0">Elève</option>
                    <option value="1">Professeur</option>
                    <option value="2">Administrateur</option>
                </select>
                <input type="text" name="identifiant" placeholder="Identifiant" class="input_cus_add"  id="ide_mod"/>
            </div>
            <div class="col-md-6">
                <input type="text" name="prenom" placeholder="Prénom*" class="input_cus_add" id="prenom_mod"/>
                <select name="liste_sexe" class="input_cus_add"  id="sexe_mod">
                    <option value="">Sexe</option>
                    <option value="h">Homme</option>
                    <option value="f">Femme</option>
                </select>
                <input type="date" name="date" class="input_cus_add" id="date_mod"/>
                <input type="password" name="mdp" placeholder="Mot de passe" class="input_cus_add"  id="mdp_mod"/>
            </div>
            <button class="but_cus">Valider</button>
        </form>
            <?php AddButEnd(); ?> 
</div>