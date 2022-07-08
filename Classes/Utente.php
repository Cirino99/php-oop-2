<?php
class Utente
{
    protected string $nome;
    protected string $cognome;
    protected int $eta;
    private object $cartaCredito;

    public function  __construct(string $nome, string $cognome)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    /**
     * Get the value of cartaCredito
     */
    public function getCartaCredito()
    {
        return $this->cartaCredito;
    }

    /**
     * Set the value of cartaCredito
     *
     * @return  self
     */
    public function setCartaCredito(object $cartaCredito)
    {
        $this->cartaCredito = $cartaCredito;

        return $this;
    }
}
