<?php
try {
    $base = new PDO('mysql:host=localhost;dbname=cross','root','');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>