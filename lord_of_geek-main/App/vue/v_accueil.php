<section>
    <h1>
        Lord Of Geek
    </h1>
    <h2>
        le prince des jeux sur internet
    </h2>

</section>
<section class="jeux">
    <div>
        <?php

        foreach ($alljeux as $unJeu) {
            $id = $unJeu['id'];
            $nom_jeux = $unJeu['nom_jeux'];
            $prix = $unJeu['prix'];
            $image = $unJeu['image'];
            $description = $unJeu['description'];
        ?>
            <article>
                <img src="public/images/jeux/<?= $image ?>" alt="Image de <?= $nom_jeux; ?>" />
                <p><?= $nom_jeux ?></p>
                <p><?= "Prix : " . $prix . " Euros" ?>
                <p><?= "Description : " . $description ?></p>
                <a href="index.php?uc=visite&categorie=<?= $categorie ?>&jeu=<?= $id ?>&action=ajouterAuPanier">
                    <img src="public/images/mettrepanier.png" title="Ajouter au panier" class="add" />
                </a>
                </p>
            </article>
        <?php
        }
        ?>
    </div>
</section>