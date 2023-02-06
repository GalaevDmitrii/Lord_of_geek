<?php

include 'App/modele/M_reg.php';
$email = '';

if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['password'])) {

    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $psw = $_POST['password'];
}

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $m_reg = new M_reg();
    echo $m_reg->register($prenom, $nom, $email, $psw) ? "<br>" . "Operation reussie" : "Erreur";
};
