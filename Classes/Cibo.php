<?php
class Cibo extends Prodotto
{
    protected int $peso;
    protected string $dataScadenza;
    protected string $allergeni;
    protected string $ingredienti;

    public function  __construct(string $numeroProdotto, string $nome, string $animale, string $dataScadenza, int $peso, string $allergeni, string $ingredienti)
    {
        parent::__construct($numeroProdotto, $nome, $animale);
        $this->dataScadenza = $dataScadenza;
        $this->peso = $peso;
        $this->allergeni = $allergeni;
        $this->ingredienti = $ingredienti;
    }

    /**
     * Get the value of peso
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Get the value of dataScadenza
     */
    public function getDataScadenza()
    {
        return $this->dataScadenza;
    }

    /**
     * Get the value of allergeni
     */
    public function getAllergeni()
    {
        return $this->allergeni;
    }

    /**
     * Get the value of ingredienti
     */
    public function getIngredienti()
    {
        return $this->ingredienti;
    }
}
