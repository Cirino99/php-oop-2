<?php
include __DIR__ . '/classes/Prodotto.php';
include __DIR__ . '/classes/Cibo.php';
include __DIR__ . '/classes/Giochi.php';
include __DIR__ . '/classes/Cucce.php';
include __DIR__ . '/classes/Utente.php';
include __DIR__ . '/classes/CartaCredito.php';
include __DIR__ . '/classes/Carrello.php';

$croccantini = new Cibo('ABC321S', 'Croccantini', 'cane', '22-11-2022', 350, 'latticini', 'farina,carne,latte');
$croccantini->setQuantita(10);
$croccantini->setPrezzo(25);
echo $croccantini->getNumeroProdotto();
echo '<br>';
echo $croccantini->getDataScadenza();

$utente1 = new Utente('Mario', 'Rossi', true);
$cc1 = new CartaCredito('Mario Rossi', 'Visa', '09-07-2023', '6532254725');
$utente1->setCartaCredito($cc1);
echo '<br>';
echo $utente1->getCartaCredito()->getNumero();
$myCarrello = new Carrello($utente1);
$myCarrello->addProduct($croccantini, 5);
echo '<br>';
$myCarrello->pagamento();
