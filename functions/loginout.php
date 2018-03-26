<?php
    define('SESSION_USERNAME', 'SESSION_USERNAME');


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
        var_dump('Nom de l\'utilisateur', $username);
        $pwd = filter_var($_POST['pwd'], FILTER_SANITIZE_STRING);
        var_dump('Mot de passe', $pwd);

        //on authentifie
        require_once dirname(__FILE__) . '/authenticate.php'; //repertoire courant du fichier en cours

        //Initialisation du message d'erreur
        $err_msg = '';


        //on appelle la fonction authenticate pour authentifier
        if (authenticate($username, $pwd)) {
//        if (authenticate($username, $pwd)) {
            //on met le nom de l'utilisateur dans la variable de session
            $_SESSION[SESSION_USERNAME] = $username;
            //si variable de session, l'utilisateur est loggé
            $is_logged = true;
        } else {
            $is_logged = false;
//            var_dump('si pas utilisateur', $is_logged);
            if(!is_username_ok($username)){
                $err_msg = 'L\'utilisateur n\'existe pas';

            }
        }


    } elseif (user_is_logged() && array_key_exists('logout_submit', $_POST)) {
        //si cliqué sur bouton logout, il se déconnecte
        unset($_SESSION[SESSION_USERNAME]);
    }

