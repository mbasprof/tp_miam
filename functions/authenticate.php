<?php
    /**
     * Created by PhpStorm.
     * User: mbastide
     * Date: 2018-03-26
     * Time: 12:05
     */

//on reçoit le username et le password en paramètres
    function authenticate($username, $pwd)
    {
        //tableau des utilisateurs
        $users = array(
            'Marion' => 'a589e9efdfe4754a29d176b13c9122ca',
            'Gilles' => 'b6a615cbb437caa5a0cc0ff2d833eb3a',


        );

        //l'utilisateur existe dans le tableau des utilisateurs
        // on compare le mot de passe saisi au mot de passe encrypté
        return array_key_exists($username, $users) && ($users[$username] === md5($pwd));

    }

