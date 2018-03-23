<div class="item">
                <div class="item_description">
                    <h3><?= $product['prod_name'] ?></h3>
<ul>
    <li><span class="item_caract"><?= INGREDIENTS_LABEL ?>
            : </span><?= $product['prod_ingredients'] ?>
    </li>
    <li><span class="item_caract"><?= PORTION_LABEL ?>
            : </span><?= $product['prod_portion'] ?></li>
    <li><span class="item_caract"><?= PRICE_LABEL ?>
            : </span><?= $product['prod_price'] ?> CAD
    </li>
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