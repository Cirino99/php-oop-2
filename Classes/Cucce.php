<?php
class Cucce extends Prodotto
{
    protected int $lunghezza;
    protected int $larghezza;
    protected int $profondita;
    protected string $materiale;
    protected string $esternoInterno;


    public function  __construct(string $numeroProdotto, string $nome, string $animale, int $lunghezza, int $larghezza, int $profondita, string $materiale)
    {
        parent::__construct($numeroProdotto, $nome, $animale);
        $this->lunghezza = $lunghezza;
        $this->larghezza = $larghezza;
        $this->profondita = $profondita;
        $this->materiale = $materiale;
    }

    /**
     * Get the value of lunghezza
     */
    public function getLunghezza()
    {
        return $this->lunghezza;
    }

    /**
     * Get the value of larghezza
     */
    public function getLarghezza()
    {
        return $this->larghezza;
    }

    /**
     * Get the value of profondita
     */
    public function getProfondita()
    {
        return $this->profondita;
    }

    /**
     * Get the value of materiale
     */
    public function getMateriale()
    {
        return $this->materiale;
    }

    /**
     * Get the value of esternoInterno
     */
    public function getEsternoInterno()
    {
        return $this->esternoInterno;
    }

    /**
     * Set the value of esternoInterno
     *
     * @return  self
     */
    public function setEsternoInterno($esternoInterno)
    {
        $this->esternoInterno = $esternoInterno;

        return $this;
    }
}
