<?php
    define('SESSION_USERNAME', 'SESSION_USERNAME');
    define('ERR_MSG_LOGIN', 'ERR_MSG_LOGIN');

    //si pas de session activée, on en démarre une
    if (PHP_SESSION_NONE === session_status()) {
        session_start();

    }
    // var_dump($_SESSION);

    function user_is_logged()
    {
        return array_key_exists(SESSION_USERNAME, $_SESSION);
    }

    //Si l'utilisateur est loggé ET si on reçoit les 3 données du login
    if ((!user_is_logged())
        && array_key_exists('username', $_POST)
        && array_key_exists('pwd', $_POST)
        && array_key_exists('login_submit', $_POST)) {

        // on filtre les données reçues
        $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $pwd = filter_var($_POST['pwd'], FILTER_SANITIZE_STRING);

        //on authentifie
        require_once dirname(__FILE__) . '/authenticate.php'; //repertoire courant du fichier en cours

        //Initialisation du message d'erreur
        $err_msg = '';

        //on appelle la fonction authenticate pour authentifier
        $user_authenticate = authenticate($username, $pwd);

        if ($user_authenticate === USER_AUTHENTICATED) {
            //on met le nom de l'utilisateur dans la variable de session
            $_SESSION[SESSION_USERNAME] = $username;
            //si variable de session, l'utilisateur est loggé
            $is_logged = true;
        } elseif (($user_authenticate === USER_NOT_PRESENT) ||($user_authenticate === PWD_NOT_MATCHED )) {
            $err_msg = 'Utilisateur ou mot de passe erroné !';
            $_SESSION[ERR_MSG_LOGIN] = $err_msg;
        }

    } elseif (user_is_logged() && array_key_exists('logout_submit', $_POST)) {
        //si cliqué sur bouton logout, il se déconnecte
        unset($_SESSION[SESSION_USERNAME]);
    }

