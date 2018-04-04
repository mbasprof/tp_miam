<?php
    define('PAGE_NAME', 'Commander');
    define('PAGE_ID', 'commander');
    require_once('views/page_top.php');

    define('IS_VALID', 'IS_VALID');
    define('VALUE', 'VALUE');
    define('ERR_VALID_MSG', 'ERR_VALID_MSG');

    //Réception des données
    $en_post = $_SERVER['REQUEST_METHOD'] === 'POST';
//    var_dump('en post:', $en_post);

    //création d'un tableau de validation
    $validation = array(
        'new_username' => array(
                IS_VALID => false,
                VALUE => null,
                ERR_VALID_MSG => 'Le nom d\'utilisateur doit comporter au moins 6 caractères.',
        ),
        'new_pwd' => array(
            IS_VALID => false,
            VALUE => null,
            ERR_VALID_MSG => 'Le mot de passe doit comporter au moins 6 caractères.',
        ),
        'confirm_new_username' => array(
            IS_VALID => false,
            VALUE => null,
            ERR_VALID_MSG => 'Les mots de passe ne sont pas identiques.',
        ),

    );
?>
    <!-- #top-main -->
    <div id="top-main" class="wrapper">
        <h1>Pour commander :</h1>
    </div>
    <!--END #topmain-->
    <div id="middle-main" class="wrapper">
        <!-- START #categories-->
        <section id="se_connecter">
            <ol>
                <li>Connectez-vous à votre compte.</li>
                <li>Si vous n'avez pas de compte, veuillez en créer un :</li>
            </ol>
            <form id="creation_compte" method="post">
                <div>
                    <label for="new_username">Nom d'utilisateur</label>
                    <input type="text" name="new_username" id="new_username" value="">
                </div>
                <div>
                    <label for="new_pwd">Mot de passe</label>
                    <input type="password" name="new_pwd" id="new_pwd">
                </div>
                <div>
                    <label for="confirm_pwd">Confirmation du mot de passe</label>
                    <input type="password" name="confirm_new_pwd" id="confirm_pwd">
                </div>
                <div>
                    <input type="submit" name="submit_new" id="submit_new" value="Créer un compte">
                </div>
            </form>
        </section>
        <!--  START aside -->
        <aside>
            <?php require('views/secondary_nav.php'); ?>
            <?php require('views/order_link.php'); ?>
        </aside>
    </div>
    <!--  END #middle-main-->
    <div id="bottom-main" class="wrapper">
<?php require_once('views/plats_populaires.php'); ?>
    </div><?php require_once('views/page_bottom.php'); ?>