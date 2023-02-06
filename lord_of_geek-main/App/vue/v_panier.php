<section>
    <img src="public/images/panier.gif" alt="Panier" title="panier" />
    <?php
    foreach ($lesJeuxDuPanier as $unJeu) {
        $id = $unJeu['id'];
        $description = $unJeu['description'];
        $image = $unJeu['image'];
        $prix = $unJeu['prix'];
    ?>
        <p>
            <img src="public/images/jeux/<?php echo $image ?>" alt=image width=100 height=100 />
            <?php
            echo $description . "($prix Euros)";
            ?>
            <a href="index.php?uc=panier&jeu=<?php echo $id ?>&action=supprimerUnJeu" onclick="return confirm('Voulez-vous vraiment retirer ce jeu ?');">
                <img src="public/images/retirerpanier.png" TITLE="Retirer du panier">
            </a>
        </p>
    <?php
    }
    $total_prix = 0;
    foreach ($lesJeuxDuPanier as $unJeu) {
        $total_prix += $unJeu['prix'];
    }
    echo "Votre prix total est : " . $total_prix . " Euros";
    ?>
    <br>
    <a href=index.php?uc=commander&action=passerCommande>
        <img src="public/images/commander.jpg" title="Passer commande">
    </a>


</section>