<section id="visite">
    <aside id="categories">
        <ul>
            <?php
            foreach ($lesCategories as $uneCategorie) {
                $idCategorie = $uneCategorie['id'];
                $libCategorie = $uneCategorie['nom_cat'];
            ?>
                <li>
                    <a href=index.php?uc=visite&categorie=<?php echo $idCategorie ?>&action=voirJeux><?php echo $libCategorie ?></a>
                </li>
            <?php
            }
            ?>
        </ul>
    </aside>
    <aside id="consoles">
        <ul>
            <?php
            foreach ($lesConsoles as $uneConsole) {
                $idConsole = $uneConsole['id'];
                $libConsoles = $uneConsole['nom_console'];
            ?>
                <li>
                    <a href=index.php?uc=visite&console=<?php echo $idConsole ?>&action=voirJeuxConsole><?php echo $libConsoles ?></a>
                </li>
            <?php
            }
            ?>
        </ul>
    </aside>
    <section id="jeux">
        <?php
        foreach ($lesJeux as $unJeu) {
            $id = $unJeu['id'];
            $nom_jeux = $unJeu['nom_jeux'];
            $prix = $unJeu['prix'];
            $image = $unJeu['image'];
            $description = $unJeu['description'];
            $avaliabilite = $unJeu['avaliabilite'];
        ?>
            <article>
                <img src="public/images/jeux/<?= $image ?>" alt="Image de <?= $nom_jeux; ?>" />
                <p><?= $nom_jeux ?></p>
                <p><?= "Prix : " . $prix . " Euros" ?>
                <p><?= "Description : " . $description ?></p>
                <p><?= "Avaliabilite : " . $avaliabilite ?> </p>
                <a href="index.php?uc=visite&categorie=<?= $categorie ?>&jeu=<?= $id ?>&action=ajouterAuPanier">
                    <img src="public/images/mettrepanier.png" title="Ajouter au panier" class="add" />
                </a>
                </p>
            </article>
        <?php
        }
        ?>
    </section>
</section>