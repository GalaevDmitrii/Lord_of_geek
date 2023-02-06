<?php

class M_Search
{


    public static function trouveLesJeuxDeSearch($search)
    {
        $req = "SELECT * FROM exemplaires WHERE nom_jeux = '$search'";
        $res = AccesDonnees::query($req);
        $lesearch = $res->fetchAll(PDO::FETCH_ASSOC);
        return $lesearch;
    }
}
