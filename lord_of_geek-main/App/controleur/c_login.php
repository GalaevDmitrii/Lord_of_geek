<?php
include 'App/modele/M_reg.php';

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $m_reg = new M_reg();
    $m_reg->authenticate($email, $password);
    header('location: index.php');
}

