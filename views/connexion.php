<div id="loginout_form">
    <?php if (!user_is_logged()) { ?>
        <!--  affichage du formulaire de login-->
        <form method="post" name="login">
            <label for="username">Utilisateur</label>
            <input type="text" name="username" id="username" value="">
            <label for="pwd">Mot de passe</label>
            <input type="password" name="pwd" id="pwd" value="">
            <input type="submit" name="login_submit" value="Se connecter">
        </form>
        <?php //var_dump($_POST); ?>
    <?php } else { ?>
        <!--  affichage du formulaire de logout-->
        <form method="post" name="logout">
            <input type="submit" name="logout_submit" value="Se déconnecter">
        </form>
    <?php } ?>
</div>