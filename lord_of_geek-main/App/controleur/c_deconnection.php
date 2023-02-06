<?php


include 'App/modele/M_reg.php';
$mreg = new M_reg();
if ($_SESSION['logged_in'] == true) {
    $mreg->deconnection();
    echo 'you are disconnected';
} else {
    echo 'You are not connected';
}
header('location: index.php');
