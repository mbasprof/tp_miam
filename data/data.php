<?php
    /**
     * Created by PhpStorm.
     * User: mbastide
     * Date: 2018-03-22
     * Time: 13:56
     */

    //Catalogue des produits

    $categories = array(
        0 => 'Entrées',
        1 => 'Plats de résistance',
        2 => 'Desserts',

    );

    $products = array(
        '5' => array(
            'prod_name' => 'Salade d\'épinards au fromage de chèvre',
            'category_id' => 0,
            'category_name' => 'entrée',
            'prod_ingredients' => 'Épinards, frômage de chèvre, amandes effilées, poivre rose, vinaigre balsamique, miel, huile d\'olive',
            'prod_img' => 'salade_epinard_chevre.jpg',
            'prod_img_credit' => 'https://www.freepik.com/free-photo/mixed-salad-in-wood-bowl_1247391.htm',
            'prod_price' => 5,
            'prod_portion' => '500 ml',
        ),
        '6' => array(
            'prod_name' => 'Potage parisien',
            'category_id' => 0,
            'category_name' => 'entrée',
            'prod_ingredients' => 'Pommes de terre, carottes, poireaux',
            'prod_img' => 'potage_parisien.jpg',
            'prod_img_credit' => 'https://www.freepik.com/free-photo/top-view-of-homemade-soup_973287.htm',
            'prod_price' => 4,
            'prod_portion' => '500 ml',
        ),
        '7' => array(
            'prod_name' => 'Côtelette d\'agneau au chutney à la mangue',
            'category_id' => 1,
            'category_name' => 'plat_principal',
            'prod_ingredients' => 'Agneau, mangue, curcuma',
            'prod_img' => 'plats_principaux_miam.jpg',
            'prod_img_credit' => 'https://www.freepik.com/free-photo/grilled-meat-lamp-steak_1030817.htm',
            'prod_price' => 12,
            'prod_portion' => '4 côtelettes',
        ),
        '4' => array(
            'prod_name' => 'Cheesecake newyorkais à la framboise',
            'category_id' => 2,
            'category_name' => 'dessert',
            'prod_ingredients' => 'Fromage à la crème, coulis de framboise',
            'prod_img' => 'desserts_miam.jpg',
            'prod_img_credit' => 'https://www.freepik.com/free-photo/slice-of-new-york-cheesecake_1009317.htm',
            'prod_price' => 10,
            'prod_portion' => '4 parts',
        ),
    );
