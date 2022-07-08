<?php
include __DIR__ . '/classes/Prodotto.php';
include __DIR__ . '/classes/Cibo.php';
include __DIR__ . '/classes/Giochi.php';
include __DIR__ . '/classes/Cucce.php';

$croccantini = new Cibo('ABC321S', 'Croccantini', 'cane', '22/11/2022', 350, 'latticini', 'farina,carne,latte');
echo $croccantini->getNumeroProdotto();
echo '<br>';
echo $croccantini->getDataScadenza();
