<?php
    define('PAGE_NAME', 'Commander');
    define('PAGE_ID', 'connexion_page');
    require_once('views/page_top.php');
?>
    <!-- #top-main -->
    <div id="top-main" class="wrapper">
        <h1>Pour commander :</h1>
        <ol>
            <li>premiere etape</li>
            <li>deuxieme etape</li>
            <li>troisieme etape</li>
  
            
        </ol>
    </div>
    <!--END #topmain-->
    <div id="middle-main" class="wrapper">
        <!-- START #categories-->
        <section id="se_connecter">
            <h2>Connectez-vous à votre compte :</h2>
            <form id="connexion_compte" method="post">
                <div>
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" name="username" id="username" value="">
                </div>
                <div>
                    <label for="pwd">Mot de passe</label>
                    <input type="password" name="pwd" id="pwd">
                </div>
                <div>
                    <input type="submit" name="submit" id="submit" value="Se connecter">
                </div>
            </form>
            <h2>Si vous n'avez pas de compte, veuillez en créer un :</h2>
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
                    <input type="password" name="confirm_pwd" id="confirm_pwd">
                </div>
                <div>
                    <input type="submit" name="submit_new" id="submit_new" value="Créer un compte">
                </div>
            </form>
        </section>
        <!--  START aside -->
        <aside>
            <!--        --><?php //require 'views/order_link.php' ;?>
        </aside>
    </div>
    <!--  END #middle-main-->
    <div id="bottom-main" class="wrapper">
    <!--    --><?php //require_once('views/plats_populaires.php'); ?>
    </div><?php require_once('views/page_bottom.php'); ?>