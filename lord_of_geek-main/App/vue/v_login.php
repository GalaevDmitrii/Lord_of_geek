
 <?php if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] == false) {
        echo

        '<form action="index.php?uc=login" method="post">
    <label for="email">Votre Email: </label>
    <input type="text" name="email" id="">
    <label for="password">Vote mor de passe: </label>
    <input type="password" name="password">
    <input type="submit" value="Connextion">

</form>';
    } ?>