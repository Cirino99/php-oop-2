<?php
class Carrello
{
    protected object $utente;
    protected $prodotti = [];

    public function  __construct(object $utente)
    {
        $this->utente = $utente;
    }

    public function __destruct()
    {
    }

    /**
     * Get the value of utente
     */
    public function getUtente()
    {
        return $this->utente;
    }

    public function addProduct(object $prodotto, int $quantita)
    {
        if ($prodotto->getQuantita() >= $quantita) {
            $this->prodotti[] = [
                'prodotto' => $prodotto,
                'quantità' => $quantita
            ];
        } else {
            echo 'quantità non disponibile in magazzino';
        }
    }

    public function pagamento()
    {
        if (strtotime($this->utente->getCartaCredito()->getScadenza()) > strtotime(date("d-m-Y"))) {
            echo 'carta accettata';
            $prezzoTot = 0;
            foreach ($this->prodotti as $item) {
                $prezzoTot += $item['prodotto']->getPrezzo();
                $item['prodotto']->setQuantita($item['prodotto']->getQuantita() - $item['quantità']);
                $this->__destruct();
            }
            echo "<br>pagamento totale di $prezzoTot €";
        } else {
            echo 'Carta di credito scaduta';
        }
    }
}
