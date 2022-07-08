<?php
include __DIR__ . '/classes/Prodotto.php';
include __DIR__ . '/classes/Cibo.php';
include __DIR__ . '/classes/Giochi.php';
include __DIR__ . '/classes/Cucce.php';
include __DIR__ . '/classes/Utente.php';
include __DIR__ . '/classes/CartaCredito.php';

$croccantini = new Cibo('ABC321S', 'Croccantini', 'cane', '22/11/2022', 350, 'latticini', 'farina,carne,latte');
echo $croccantini->getNumeroProdotto();
echo '<br>';
echo $croccantini->getDataScadenza();

$utente1 = new Utente('Mario', 'Rossi');
$cc1 = new CartaCredito('Mario Rossi', 'Visa', '25/10/24', '6532254725');
$utente1->setCartaCredito($cc1);
echo '<br>';
echo $utente1->getCartaCredito()->getNumero();
