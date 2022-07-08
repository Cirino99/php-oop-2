<?php
class Giochi extends Prodotto
{
    protected int $lunghezza;
    protected int $larghezza;
    protected int $peso;
    protected string $materiale;
    protected int $eta;

    public function  __construct(string $numeroProdotto, string $nome, string $animale, string $materiale, int $eta)
    {
        parent::__construct($numeroProdotto, $nome, $animale);
        $this->materiale = $materiale;
        $this->eta = $eta;
    }

    /**
     * Get the value of lunghezza
     */
    public function getLunghezza()
    {
        return $this->lunghezza;
    }

    /**
     * Set the value of lunghezza
     *
     * @return  self
     */
    public function setLunghezza($lunghezza)
    {
        $this->lunghezza = $lunghezza;

        return $this;
    }

    /**
     * Get the value of larghezza
     */
    public function getLarghezza()
    {
        return $this->larghezza;
    }

    /**
     * Set the value of larghezza
     *
     * @return  self
     */
    public function setLarghezza($larghezza)
    {
        $this->larghezza = $larghezza;

        return $this;
    }

    /**
     * Get the value of peso
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set the value of peso
     *
     * @return  self
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get the value of materiale
     */
    public function getMateriale()
    {
        return $this->materiale;
    }

    /**
     * Get the value of eta
     */
    public function getEta()
    {
        return $this->eta;
    }
}
