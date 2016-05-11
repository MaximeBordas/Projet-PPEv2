<div class="container">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-4">
            <form action="login.php" method='post'>
                <div class="block" id="log_block">
                    <h1 class="logh1">Accès professeurs et administrateurs :</h1>    
                    <h1 class="logh1">Identifiant</h1>
                    <input type="text" name="login" placeholder="Votre identifiant" id="username" />
                    <h1 class="logh1">Mot de passe</h1>
                    <input type="password" name="password" placeholder="Votre mot de passe" id="password" />
                    <input type="submit" name="connexion" value="Se connecter" id="button">
                </div>
            </form>
        </div>
        <div class="col-md-2"></div>     
        <div class="col-md-4">
            <div class="block">
                <h1 class="logh1">Accès élèves :</h1><br>
                <h1 class="logh1">Classes</h1>
                <form action="synthese.php">
                    <select name="liste_classe" id="liste_classe" class="input_cus" onchange="chargerEleves()">
                        <option value="">---Classes---</option>
                        <?php ListeClasse();?>
                    </select>
                    <h1 class="logh1">Elèves</h1>
                    <select name="liste_eleve" id="liste_eleve" class="input_cus">
                        <option value="">---Elèves---</option>
                    </select>
                    <input type="submit" name="valider" value="Valider" id="button">
                </form>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>