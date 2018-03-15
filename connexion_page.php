<?php
    define('PAGE_NAME', 'Accueil');
    define('PAGE_ID', 'connexion_page');
    require_once('views/page_top.php');
?>
<!-- #top-main -->
<div id="top-main" class="wrapper">
    <h1>Pour commander :</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi beatae dicta illo maiores
        possimus veritatis? Blanditiis corporis magni minus mollitia non omnis pariatur quaerat sequi.
        Excepturi ipsam odio praesentium vero.</p>
    
    
    
</div>
<!--END #topmain-->
<div id="middle-main" class="wrapper">
    <!-- START #categories-->
    <section id="se_connecter">
        <h2>Connectez-vous à votre compte :</h2>
        <form id="connexion_compte" method="post">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username" value="" >
            <label for="pwd">Mot de passe</label>
            <input type="password" name="pwd" id="pwd" >
            <input type="submit" name="submit" id="submit" value="Se connecter" >
        </form>
        <h2>Si vous n'avez pas de compte, veuillez en créer un :</h2>
        <form id="creation_compte" method="post">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" name="username" id="username" value="" >
            <label for="pwd">Mot de passe</label>
            <input type="password" name="pwd" id="pwd" >
            <label for="confirm_pwd">Confirmation du mot de passe</label>
            <input type="password" name="confirm_pwd" id="confirm_pwd" >
            <input type="submit" name="submit" id="submit" value="Créer un compte" >
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