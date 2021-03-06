<?php
    require_once(dirname(__FILE__) . '/../defines.php');
    require_once 'functions/loginout.php';

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title><?= SITE_NAME ?></title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="style/main.css">
        <script></script>
    </head>
    <body id="<?= PAGE_ID ?>">
    <header class="">
        <div id="logo">
            <a href="index.php"><img src="images/logo_miam_200x143.jpg"
                                     alt="Logo de Miam, traiteur de plats cuisinés maison"></a>
        </div>
        <?php require(dirname(__FILE__) . '/main_nav.php'); ?>
        <?php require(dirname(__FILE__) . '/connexion.php'); ?>
    </header>
    <main>
        <!--  barre fil d'ariane et bonjour-->
        <div id="bread_connect">
            <div class="wrapper">
                <div id="breadcrumbs">
                    <a href="index.php">Accueil</a>
                </div>
<!--                <div id="connected">-->
<!--                    <span>--><?php
//                            if (array_key_exists(SESSION_USERNAME, $_SESSION)) {
//                                echo BONJOUR_MSG . $_SESSION[SESSION_USERNAME] . ' !';
//                            } ?>
<!--                    </span>-->
<!--                </div>-->
            </div>
        </div>
