<?php
    define('PAGE_NAME', 'Plats');
    define('PAGE_ID', 'plats');
    require_once('views/page_top.php');
    require_once('data/data.php');

    // affichage de base
//    var_dump($products);



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

                <?php foreach ($products as $product_id => $product) { ?>
                    <div class="item">
                        <div class="item_description">
                            <h3><?= $product['prod_name'] ?></h3>
                            <ul>
                                <li><span class="item_caract"><?= INGREDIENTS_LABEL ?> : </span><?= $product['prod_ingredients'] ?>
                                </li>
                                <li><span class="item_caract"><?= PORTION_LABEL ?> : </span><?= $product['prod_portion'] ?></li>
                                <li><span class="item_caract"><?= PRICE_LABEL ?> : </span><?= $product['prod_price'] ?> CAD</li>

                            </ul>
                        </div>
                        <figure class="item_img">
                            <img src="<?= IMG_PATH . '/' . $product['prod_img'] ?>  "
                                 alt="Photo du plat <?= $product['prod_name'] ?> ">
                            <figcaption><a
                                        href="<?= $product['prod_img_credit'] ?>"
                                        target="_blank">Designed by Freepik</a></figcaption>
                        </figure>
                    </div>
                <?php } ?>

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