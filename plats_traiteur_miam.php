<?php
    define('PAGE_NAME', 'Plats');
    define('PAGE_ID', 'plats');
    require_once('views/page_top.php');
    require_once('data/data.php');


    // affichage de base
//    var_dump('catalog', $products);
//    var_dump('categories', $categories);
//    var_dump('$_GET', $_GET);

    //Initialisation
    $category_id = null; // numéro de catégorie. si null = toutes catégories
    $produit_a_afficher = null;
    $category_name = '';


    // si paramètre category_id dans les données GET et si la clé existe dans le tableau $categories
    if (array_key_exists('category_id', $_GET) && array_key_exists($_GET['category_id'], $categories)) {
        $category_id = $_GET['category_id'];
        var_dump($category_id);
    }
    if (!is_null($category_id)) {
        $category_name = $categories[$category_id];
    }


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
                <?php
                    //on boucle sur toutes les categories
                    foreach ($categories as $cat_id => $cat_name) { ?>
                        <?php
                        //s'il n'y a pas de paramètre OU si le paramètre reçu est identique à la clé d'une catégorie
//                        if (($category_id == $cat_id) || ($category_id === null)) { //affiche le h2
                        if (($category_id == $cat_id) || ($category_id === null)) { //affiche le h2
                            echo '<h2>', $category_name, '</h2>';


                            foreach ($products as $product_id => $product) {

                                //si paramètre reçu est identique à la catégorie du produit
                                if ($cat_id === $product['category_id']) {
                                    require('views/item.php');
                                }
                            }
                        }

                    }


                ?>
            </div>
        </section>
        <!--  START aside -->
        <aside>
            <?php require('views/secondary_nav.php'); ?>
            <?php require ('views/order_link.php'); ?>
        </aside>
    </div>
    <!--  END #middle-main-->
    <div id="bottom-main" class="wrapper">
    <!--    --><?php //require_once('views/plats_populaires.php'); ?>
    </div><?php require_once('views/page_bottom.php'); ?>