<div id="loginout_form">
    <?php if (!user_is_logged()) { ?>
        <!--  affichage du formulaire de login-->
        <form method="post" name="login">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username" value="">
            <label for="pwd">Mot de passe</label>
            <input type="password" name="pwd" id="pwd" value="">
            <span class="invalid"><?php
                if (array_key_exists(ERR_MSG_LOGIN, $_SESSION)) {
                    echo $_SESSION[ERR_MSG_LOGIN];
                    unset($_SESSION[ERR_MSG_LOGIN]);
                }
            ?></span>
            <input type="submit" name="login_submit" value="Se connecter">
        </form>
    <?php } else { ?>
        <!--  affichage du formulaire de logout-->
        <form method="post" name="logout">
            <input type="submit" name="logout_submit" value="Se déconnecter">
        </form>
    <?php } ?>
</div>