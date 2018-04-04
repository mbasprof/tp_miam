<div id="loginout_form">
    <?php if (!user_is_logged()) { ?>
        <!--  affichage du formulaire de login-->
        <form method="post" name="login">
            <div><label for="username">Nom d'utilisateur</label>
                <input type="text" name="username" id="username" value="">
            </div>
            <div><label for="pwd">Mot de passe</label>
                <input type="password" name="pwd" id="pwd" value="">
            </div>
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
            <div id="connected">
                    <span><?php
                            if (array_key_exists(SESSION_USERNAME, $_SESSION)) {
                                echo BONJOUR_MSG . $_SESSION[SESSION_USERNAME] . ' !';
                            } ?>
                    </span>
            </div>
                <input type="submit" name="logout_submit" value="Se déconnecter">
        </form>
    <?php } ?>
</div>