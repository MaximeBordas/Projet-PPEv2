<?php
include 'views/includes/header.php';
if (isset($_GET['page'])) {
    $page=$_GET['page'];
}
else {
    $page="accueil";
}
if ($page!="accueil" && isset($page)) {
    include 'views/includes/head_admin.php';
    include 'views/includes/menu.html';
}
switch ($page) {
    case 'gestion_user':
        include 'views/gestion_user.php';
        break;
    
    case 'gestion_classe':
        include 'views/gestion_classe.php';
        break;
    
    case 'gestion_groupe':
        include 'views/gestion_groupe.php';
        break;
    
    case 'gestion_type_groupe':
        include 'views/gestion_type_groupe.php';
        break;
    
    case 'gestion_parcours':
        include 'views/gestion_parcours.php';
        break;
    
    default:
        include 'views/accueil.php';
        break;
}
include 'views/includes/footer.php';
?>