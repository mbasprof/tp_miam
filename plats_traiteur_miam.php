<?php
    define('PAGE_NAME', 'Plats');
    define('PAGE_ID', 'plats');
    require_once('views/page_top.php');
?>
    <!-- #top-main -->
    <div id="top-main" class="wrapper">
        <h1>Les plats de la semaine</h1>
    </div>
    <!--END #topmain-->
    <div id="middle-main" class="wrapper">
        <!-- START #categoriest-->
        <section id="categories">
            <div class="category">
                <h2>Nos entrées</h2>
                <div class="item">
                    <div class="item_description">
                        <h3>Salade d'épinards au fromage de chèvre</h3>
                        <ul>
                            <li><span class="item_caract">Ingrédients :</span>Épinards, frômage de chèvre, amandes
                                effilées, poivre rose, vinaigre balsamique, miel, huile d'olive
                            </li>
                            <li><span class="item_caract">Congélation :</span>Non</li>
                            <li><span class="item_caract">Portions :</span>500ml et 1l</li>
                        </ul>
                    </div>
                    <figure class="item_img">
                        <img src="images/entrees/salade_epinard_chevre.jpg"
                             alt="Salade aux épinards et fromage de chèvre">
                        <figcaption><a href="https://www.freepik.com/free-photo/mixed-salad-in-wood-bowl_1247391.htm"
                                       target="_blank">Designed by Freepik</a></figcaption>
                    </figure>
                </div>
                <div class="item">
                    <div class="item_description">
                        <h3>Salade d'épinards au fromage de chèvre</h3>
                        <ul>
                            <li><span class="item_caract">Ingrédients :</span>Épinards, frômage de chèvre, amandes
                                effilées, poivre rose, vinaigre balsamique, miel, huile d'olive
                            </li>
                            <li><span class="item_caract">Congélation :</span>Non</li>
                            <li><span class="item_caract">Portions :</span>500ml et 1l</li>
                        </ul>
                    </div>
                    <figure class="item_img">
                        <img src="images/entrees/salade_epinard_chevre.jpg"
                             alt="Salade aux épinards et fromage de chèvre">
                        <figcaption><a href="https://www.freepik.com/free-photo/mixed-salad-in-wood-bowl_1247391.htm"
                                       target="_blank">Designed by Freepik</a></figcaption>
                    </figure>
                </div>
            </div>
        </section>
        <!--  START aside -->
        <aside>
            <div id="secondary-nav-container">
                <h2>Voir :</h2>
                <nav id="secondary-nav">
                    <ul>
                        <li>
                            <a href="#">Nos entrées</a>
                        </li>
                        <li>
                            <a href="#">Nos plats principaux</a>
                        </li>
                        <li>
                            <a href="#">Nos desserts</a>
                        </li>
                        <li>
                            <a href="#">Tous les plats</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <?php require 'views/order_link.php'; ?>
        </aside>
    </div>
    <!--  END #middle-main-->
    <div id="bottom-main" class="wrapper">
    <!--    --><?php //require_once('views/plats_populaires.php'); ?>
    </div><?php require_once('views/page_bottom.php'); ?>