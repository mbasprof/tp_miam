<?php
    /**
     * Created by PhpStorm.
     * User: mbastide
     * Date: 2018-03-26
     * Time: 12:05
     */

    define('USER_UNKNOWN', -1);
    define('USER_PRESENT', 0);
    define('USER_AUTHENTICATED', 1);
    define('USER_NOT_PRESENT', 2);
    define('PWD_NOT_MATCHED', 3);

//on reçoit le username et le password en paramètres
    function authenticate($username, $pwd)
    {
        $result = USER_UNKNOWN;
        //tableau des utilisateurs
        $users = array(
            'Marion' => 'a589e9efdfe4754a29d176b13c9122ca',
            'Gilles' => 'b6a615cbb437caa5a0cc0ff2d833eb3a',
        );

        //l'utilisateur existe dans le tableau des utilisateurs
        // on compare le mot de passe saisi au mot de passe encrypté
        if (array_key_exists($username, $users)){
            $result = USER_PRESENT;

            if ($users[$username] === md5($pwd)){
                $result = USER_AUTHENTICATED;
            } else {
                $result = PWD_NOT_MATCHED;
            }
        } else {
            $result = USER_NOT_PRESENT;
        }
         return $result;
    }






