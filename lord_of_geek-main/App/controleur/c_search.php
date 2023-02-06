<?php
include 'App/modele/M_categorie.php';
include 'App/modele/M_exemplaire.php';
include 'App/modele/M_Console.php';
include 'App/modele/M_Search.php';


$search = $_POST['search'];
$lesearch = M_Search::trouveLesJeuxDeSearch($search);
