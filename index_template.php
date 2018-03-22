<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Miam, petits plats cuisinés maison livrés à la maison</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link rel="stylesheet" href="style/main.css">
        <script></script>
    </head>
    <body id="accueil">
        <header class="">
            <div id="logo">
                <img src="images/logo_miam_200x143.jpg" alt="Logo de Miam, traiteur de plats cuisinés maison">
            </div>
            <nav id="main-nav">
                <ul>
                    <li>
                        <a href="index.php">Accueil</a>
                    </li>
                    <li>
                        <a href="plats.php">Nos entrées</a>
                    <li>
                        <a href="plats.php">Nos plats principaux</a>
                    </li>
                    <li>
                        <a href="plats.php">Nos desserts</a>
                    </li>
                    <li>
                        <a href="commander.php">Commander</a>
                    </li>
                </ul>
            </nav>
            <div id="connexion">
                <form action="">
                    <label for="username">Utilisateur</label>
                    <input type="text" name="username" id="username" value="">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" id="password" value="">
                    <input type="submit" value="Se connecter">
                </form>
            </div>
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
            <!-- banner -->
            <div id="banner"><img src="images/background.jpg" alt="Photo"></div>
            <!-- #top-main -->
            <div id="top-main">
                <h1>Miam, votre traiteur bien aimé</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi beatae dicta illo maiores
                    possimus veritatis? Blanditiis corporis magni minus mollitia non omnis pariatur quaerat sequi.
                    Excepturi ipsam odio praesentium vero.</p>
                <h2>Des petits plats maison sans lever le petit doigt !</h2>
            </div>
            <!--END #topmain-->
            <div id="middle-main">
                <!-- START #categoriest-->
                <section id="categories">
                    <div class="categorie" id="cat_entrees">
                        <h3>Nos<br>entrées</h3>
                        <a href="#"><img src="images/salades_miam.jpg"
                                         alt="photo d'une entrée préparée par le traiteur Miam">
                            <span>+ d'entrées</span>
                        </a>
                    </div>
                    <div class="categorie" id="cat_plats">
                        <h3>Nos plats<br>principaux</h3>
                        <a href="#"><img src="images/plats_principaux_miam.jpg"
                                         alt="photo d'un plat préparé par le traiteur Miam">
                            <span>+ de plats</span>
                        </a>
                    </div>
                    <div class="categorie" id="cat_desserts">
                        <h3>Nos<br>desserts</h3>
                        <a href="#"><img src="images/desserts/desserts_miam.jpg"
                                         alt="photo d'un plat préparé par le traiteur Miam">
                            <span>+ de desserts</span>
                        </a>
                    </div>
                </section>
                <!--  START aside -->
                <aside>
                    <div id="order">
                        <h2>Commander<br>chez Miam !</h2>
                        <p>bbladbla ndalanl</p>
                    </div>
                    <nav id="secondary-nav">
                        <ul>
                            <li>
                                <a href="#">Entrées</a>
                            </li>
                            <li>
                                <a href="#">Plats principaux</a>
                            </li>
                            <li>
                                <a href="#">Desserts</a>
                            </li>
                        </ul>
                    </nav>
                </aside>
            </div>
            <!--  END #middle-main-->
            <div id="bottom-main">
                <h2>Nos plats les plus populaires</h2>
                <!-- plats populaires-->
                <div id="plats_populaires">
                    <div class="plat_populaire">
                        <a href="#"><img src="images/poulet_populaire.jpg" alt=""></a>
                    </div>
                    <div class="plat_populaire">
                        <a href="#"><img src="images/poulet_populaire.jpg" alt=""></a>
                    </div>
                    <div class="plat_populaire">
                        <a href="#"><img src="images/poulet_populaire.jpg" alt=""></a>
                    </div>
                    <div class="plat_populaire">
                        <a href="#"><img src="images/poulet_populaire.jpg" alt=""></a>
                    </div>
                    <div class="plat_populaire">
                        <a href="#"><img src="images/poulet_populaire.jpg" alt=""></a>
                    </div>
                </div>
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