<!DOCTYPE html>
<!--
Prototype de Lord Of Geek (LOG)
-->
<html>

<head>
    <title>Lord Of Geek 2022</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/cssGeneral.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
</head>

<body>
    <header>
        <!-- Images En-tête -->
        <img src="public/images/logo.png" alt="Logo Lord Of Geek" />
        <!--  Menu haut-->
        <nav id="menu">
            <ul>
                <li><a href="index.php?uc=accueil"> Accueil </a></li>
                <li><a href="index.php?uc=visite&action=voirCategories"> Voir le catalogue de jeux </a></li>
                <li><a href="index.php?uc=panier&action=voirPanier"> Voir son panier </a></li>
                <li><a href="index.php?uc=compte"> Mon compte </a></li>
            </ul>
        </nav>

        <!-- searchbar -->
        <div id="search-results">
            <form action="index.php?uc=searchJeux " method="post">
                <input type="text" name="search" placeholder="Search by name">
                <button type="submit" name="search-button">Search</button>
            </form>
            <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
                echo  '<form action="index.php?uc=deconnection" method="post">
                    <input type="submit" value="Logout"></form>';
                echo "Welcome, " . $_SESSION['name'] . "!";
            } else {
                echo "You are not logged in.";
            }
            ?>



    </header>
    <main>
        <?php
        // Controleur de vues
        // Selon le cas d'utilisation, j'inclus un controleur ou simplement une vue
        switch ($uc) {
            case 'accueil':
                include 'App/vue/v_accueil.php';
                break;
            case 'searchJeux':
                include 'App/vue/v_search.php';
                break;
            case 'visite':
                include("App/vue/v_jeux.php");
                break;
            case 'panier':
                include("App/vue/v_panier.php");
                break;
            case 'commander':
                include("App/vue/v_commande.php");
                break;
            case 'compte':
                include("App/vue/v_compte.php");
                break;
            default:
                break;
            case 'reg':
                include("App/vue/v_reg.php");
                break;
            case 'login':
                include("App/vue/v_login.php");
                break;
            case 'deconnection':
                include("App/vue/v_compte.php");
                break;
        }
        ?>
    </main>
    <footer>
        <?= include('App/vue/v_contact.php') ?>
    </footer>

</body>

</html>