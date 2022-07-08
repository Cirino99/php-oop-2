<?php
class Prodotto
{
    protected string $numeroProdotto;
    protected float $prezzo;
    protected string $nome;
    protected int $pezzi;
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
     * Get the value of pezzi
     */
    public function getPezzi()
    {
        return $this->pezzi;
    }

    /**
     * Set the value of pezzi
     *
     * @return  self
     */
    public function setPezzi($pezzi)
    {
        $this->pezzi = $pezzi;

        return $this;
    }
}
