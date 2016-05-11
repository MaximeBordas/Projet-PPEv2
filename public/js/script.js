$(document).ready(function() {
    var taille = $(document).height();
    $('#left_menu').css("height",taille);
    
    var liste = {
    url: "commons/auto_complete.php",
    theme: "blue-light",
	list: {
        showAnimation: {
			type: "fade", //normal|slide|fade
			time: 400,
			callback: function() {}
		},

		hideAnimation: {
			type: "slide", //normal|slide|fade
			time: 400,
			callback: function() {}
		},
        maxNumberOfElements: 10,
		match: {
			enabled: true
		}
	}
    }
    $('#recherche').easyAutocomplete(liste);

});

function changeActionForm(act) {
    document.getElementById("form_pop").reset();
    $('#form_pop').attr('action', 'commons/add_mod_supp/'+act);
}

function modUser(id,prenom,nom,classe,sexe,type,date,identifiant,mdp) {
    document.getElementById("id_mod").value = id;
    document.getElementById("nom_mod").value = nom;
    document.getElementById("prenom_mod").value = prenom;
    document.getElementById("classe_mod").value = classe;
    document.getElementById("sexe_mod").value = sexe;
    document.getElementById("type_mod").value = type;
    document.getElementById("date_mod").value = date;
    document.getElementById("ide_mod").value = identifiant;
    document.getElementById("mdp_mod").value = mdp;
}

function modPoint(id,libelle,min,max,situation) {
    document.getElementById("id_mod").value = id;
    document.getElementById("libelle_mod").value = libelle;
    document.getElementById("min_mod").value = min;
    document.getElementById("max_mod").value = max;
    document.getElementById("loca_mod").value = situation;
}

function modType(id,libelle,point) {
    document.getElementById("id_mod").value = id;
    document.getElementById("libelle_mod").value = libelle;
    document.getElementById("point_mod").value = point;
}

function chargerEleves() {
    var classe = document.getElementById("liste_classe").value;
    var $eleve = $('#liste_eleve');
    if(classe != '') {
        $eleve.empty(); // on vide la liste des départements
            
        $.ajax({
            url: 'commons/db/eleve_json.php',
            data: 'classe_id='+ classe, // on envoie $_GET['classe_id']
            dataType: 'json',
            success: function(json) {
                $.each(json, function(index, value) {
                    $eleve.append('<option value="'+ index +'">'+ value +'</option>');
                });
            }
        });
    }
}

function submitSearch() {
    document.getElementById("search").submit();
}

function changeArc(id) {
    document.getElementById(id).value = "Activer";
}