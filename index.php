<?php
    define('PAGE_NAME', 'Accueil');
    define('PAGE_ID', 'accueil');
    require_once('views/page_top.php');
?><!-- banner -->
<div id="banner" class="wrapper"><img src="images/background.jpg" alt="Photo"></div>
<!-- #top-main -->
<div id="top-main" class="wrapper">
    <h1>Miam, votre traiteur bien aimé</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi beatae dicta illo maiores
        possimus veritatis? Blanditiis corporis magni minus mollitia non omnis pariatur quaerat sequi.
        Excepturi ipsam odio praesentium vero.</p>
    <h2>Des petits plats maison sans lever le petit doigt !</h2>
</div>
<!--END #topmain-->
<div id="middle-main" class="wrapper">
    <!-- START #categoriest-->
    <section id="categories">
        <div class="categorie" id="cat_entrees">
            <h3>Nos<br>entrées</h3>
            <a href="#"><img src="images/entrees/salades_miam.jpg"
                             alt="photo d'une entrée préparée par le traiteur Miam">
                <span>+ d'entrées</span>
            </a>
        </div>
        <div class="categorie" id="cat_plats">
            <h3>Nos plats<br>principaux</h3>
            <a href="#"><img src="images/plats/plats_principaux_miam.jpg"
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
<div id="bottom-main" class="wrapper">
    <?php require_once('views/plats_populaires.php'); ?>
</div><?php require_once('views/page_bottom.php'); ?>