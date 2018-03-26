<?php

?><nav id="main-nav">
    <ul>
        <li>
            <a href="<?= ACCUEIL_FILENAME ?>">Accueil</a>
        </li>
        <li>
            <a href="<?= PLATS_FILENAME,  '?category_id=', urlencode('0') ?>">Nos entrées</a>
        </li>
        <li>
            <a href="<?= PLATS_FILENAME,  '?category_id=', urlencode('1') ?>">Nos plats principaux</a>
        </li>
        <li>
            <a href="<?= PLATS_FILENAME,  '?category_id=', urlencode('2') ?>">Nos desserts</a>
        </li>
        <li>
            <a href="<?= COMMANDER_FILENAME ?>">Commander</a>
        </li>
    </ul>
</nav>