<?php


class M_reg
{
    function register($prenom, $nom, $email, $psw)
    {

        $psw = password_hash($psw, PASSWORD_BCRYPT);
        $requete_sql = 'INSERT INTO utilisateur (nom, prenom, email, mot_passe) VALUES (:nom, :prenom, :email, :mot_passe)';
        $monPDO = AccesDonnees::getPdo();
        $stmt = $monPDO->prepare($requete_sql);

        $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
        $stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $stmt->bindParam(':email',   $email, PDO::PARAM_STR);
        $stmt->bindParam(':mot_passe',  $psw, PDO::PARAM_STR);
        return $stmt->execute();
    }


    function authenticate($email, $password)
    {
        $requete_sql = 'SELECT mot_passe, nom, prenom FROM utilisateur WHERE email = :email';
        $monPDO = AccesDonnees::getPdo();
        $stmt = $monPDO->prepare($requete_sql);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $result = $stmt->fetch();
        if ($result) {
            $password_hash = $result['mot_passe'];
            if (password_verify($password, $password_hash)) {
                $_SESSION['logged_in'] = true;
                $_SESSION['name'] = $result['nom'];
                $_SESSION['prenom'] = $result['prenom'];
                $_SESSION['email'] = $email;
                return true;
            }
        }
        return false;
    }
    function deconnection()
    {

        session_destroy();
    }
}
