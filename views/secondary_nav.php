<?php

?>
<div id="secondary-nav-container">
    <h2>Voir :</h2>
    <nav id="secondary-nav">
        <ul>
            <li>
                <a href="<?= PLATS_FILENAME, '?category_id=', urlencode('0') ?>">Nos entrées</a>
            </li>
            <li>
                <a href="<?= PLATS_FILENAME, '?category_id=', urlencode('1') ?>">Nos plats principaux</a>
            </li>
            <li>
                <a href="<?= PLATS_FILENAME, '?category_id=', urlencode('2') ?>">Nos desserts</a>
            </li>
            <li>
                <a href="<?= PLATS_FILENAME ?>">Tous les plats</a>
            </li>
        </ul>
    </nav>
</div>