<section>
    <div class="compte">
        <ul>
            <?php if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false) {
                echo '<li><a href="index.php?uc=reg">Creer nouvelle account</a></li>
            <li><a href="index.php?uc=login">Login</a></li>';
            } else {
                echo 'Utilisateur: ' . $_SESSION['name'] . ' ' . $_SESSION['prenom'];
                echo '</ul>
    </div>
    <section class="info">
        <div>
            <h2>Mes commandes</h2><br>
            <ul>
                <li>Des commandes precedent</li>
                <li>Des commandes en traitment</li>
            </ul>
        </div>
        <div>
            <h2>Info personnel</h2>
            <br>
            <p>Change info</p>
        </div>
    </section>';
            } ?>




</section>