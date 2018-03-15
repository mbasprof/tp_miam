<?php
    require (dirname(__FILE__)) . '/../defines.php';
    
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
                <img src="images/logo_miam_200x143.jpg" alt="Logo de Miam, traiteur de plats cuisinés maison">
            </div>
            <?php require(dirname(__FILE__) . '/main_nav.php') ?>
            <?php require(dirname(__FILE__) . '/connexion.php') ?>
<!--            <div id="connexion">-->
<!--                <form method="post">-->
<!--                    <label for="username">Utilisateur</label>-->
<!--                    <input type="text" name="username" id="username" value="">-->
<!--                    <label for="password">Mot de passe</label>-->
<!--                    <input type="password" name="password" id="password" value="">-->
<!--                    <input type="submit" value="Se connecter">-->
<!--                </form>-->
<!--            </div>-->
        </header>
        <main class="wrapper">
            <!--  barre fil d'ariane et bonjour-->
            <div id="bread_connect">
                <div id="breadcrumbs">
                    <a href="index.php">Accueil</a>
                    breadcrumbs a faire si il y a le temps
                </div>
                <div id="connected">
                    <span>Bonjour, Marion !</span>
                </div>
            </div>