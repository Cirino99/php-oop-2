<?php
class Prodotto
{
    protected string $numeroProdotto;
    protected float $prezzo;
    protected string $nome;
    protected int $quantita;
    protected string $animale;

    protected function  __construct(string $numeroProdotto, string $nome, string $animale)
    {
        $this->numeroProdotto = $numeroProdotto;
        $this->nome = $nome;
        $this->animale = $animale;
    }

    /**
     * Get the value of prezzo
     */
    public function getPrezzo()
    {
        return $this->prezzo;
    }

    /**
     * Set the value of prezzo
     *
     * @return  self
     */
    public function setPrezzo($prezzo)
    {
        $this->prezzo = $prezzo;

        return $this;
    }

    /**
     * Get the value of quantita
     */
    public function getQuantita()
    {
        return $this->quantita;
    }

    /**
     * Set the value of quantita
     *
     * @return  self
     */
    public function setQuantita($quantita)
    {
        $this->quantita = $quantita;

        return $this;
    }

    /**
     * Get the value of numeroProdotto
     */
    public function getNumeroProdotto()
    {
        return $this->numeroProdotto;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Get the value of animale
     */
    public function getAnimale()
    {
        return $this->animale;
    }
}
