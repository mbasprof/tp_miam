<?php

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Miam, petits plats cuisinés maison livrés à la maison</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="style/main.css">
        <script></script>
    </head>
    <body>
        <header class="">
            <div id="logo">
                <img src="images/logo_miam_200px.jpg" alt="Logo de Miam, traiteur de plats cuisinés maison">
            </div>
            <nav id="main-nav">
                <ul>
                    <li>
                        <a href="index.php">Accueil</a>
                    </li>
                    <li>
                        <a href="plats.php">Nos plats</a>
                    </li>
                    <li>
                        <a href="commander">Commander</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="wrapper">
            <div id="banner"><img src="" alt=""></div>
            <div id="breadcrumbs">
                <a href="index.php">Accueil</a> breadcrumbs a terminer
            </div>
            <div id="top-main">
                <!--                    INSEREZ ASIDE FILTRAGE SUR INDEX ou sur details produit ? DEMANDER A GILLES -->
                <!--                    <aside>-->
                <!--                        <nav id="secondary-nav">-->
                <!--                            <ul>-->
                <!--                                <li>-->
                <!--                                    <a href="#">Entrées</a>-->
                <!--                                </li>-->
                <!--                                <li>-->
                <!--                                    <a href="#">Plats principaux</a>-->
                <!--                                </li>-->
                <!--                                <li>-->
                <!--                                    <a href="#">Desserts</a>-->
                <!--                                </li>-->
                <!--                            </ul>-->
                <!--                        </nav>-->
                <!--                    </aside>-->
                <section>
                    <h1>Miam, votre traiteur bien aimé</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi beatae dicta illo maiores
                       possimus veritatis? Blanditiis corporis magni minus mollitia non omnis pariatur quaerat sequi.
                       Excepturi ipsam odio praesentium vero.</p>
                    <h2>Des petits plats maison sans lever le petit doigt !</h2>
                    <h3>Nos entrées</h3>
                    <div class="plats">
                        <div class="plat">

                            <ul>
                                <li><img src="" alt=""></li>
                                <li><h4>Salade Épinards Chèvre</h4></li>
                                <li>Entrée</li>   <!-- repréciser ici la catégorie ou laisse dns h3-->
                                <li>Ingrédients: Epinards, cabecou, amandes</li>
                                <li>Prix: 10 CAD</li>
                                <li>Portions: 4 personnes</li>
                            </ul>
                        </div>                        <div class="plat">

                            <ul>
                                <li><img src="" alt=""></li>
                                <li><h4>Salade Épinards Chèvre</h4></li>
                                <li>Entrée</li>   <!-- repréciser ici la catégorie ou laisse dns h3-->
                                <li>Ingrédients: Epinards, cabecou, amandes</li>
                                <li>Prix: 10 CAD</li>
                                <li>Portions: 4 personnes</li>
                            </ul>
                        </div>                       <div class="plat">

                            <ul>
                                <li><img src="" alt=""></li>
                                <li><h4>Salade Épinards Chèvre</h4></li>
                                <li>Entrée</li>   <!-- repréciser ici la catégorie ou laisse dns h3-->
                                <li>Ingrédients: Epinards, cabecou, amandes</li>
                                <li>Prix: 10 CAD</li>
                                <li>Portions: 4 personnes</li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <h2>Les plats les plus populaires</h2>
            <div id="plats_populaires">
                <div class="plat_populaire"><img src="images/" alt=""><h3>sous-titre h3</h3></div>
                <div class="plat_populaire"><img src="images/" alt=""><h3>sous-titre h3</h3></div>
                <div class="plat_populaire"><img src="images/" alt=""><h3>sous-titre h3</h3></div>
                <div class="plat_populaire"><img src="images/" alt=""><h3>sous-titre h3</h3></div>
                <div class="plat_populaire"><img src="images/" alt=""><h3>sous-titre h3</h3></div>
            </div>
        </main>
        <footer class="">
            <div id="coordonnees">
                <h4>A votre service au :</h4>
                <p> 255 Boul. Crémazie est<br> Montréal, Québec<br> H2M 1M2<br> </p>
            </div>
            <div id="tel_contact">
                <h4>Contactez-nous au :</h4>
                <p> Tel. 514 123 1234<br> Courriel : info@miam.ca </p>
            </div>
            <div id="map">
                <h4>Trouvez-nous :</h4>
            </div>
        </footer>
    </body>
</html>