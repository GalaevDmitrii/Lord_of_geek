<?php

class M_Console
{
    //  Retourne toutes les consoles sous forme d'un tableau associatif

    public static function trouveLesConsoles()
    {
        $req = "SELECT * FROM console";
        $res = AccesDonnees::query($req);
        $lesConsoles = $res->fetchAll();
        return $lesConsoles;
    }
}
