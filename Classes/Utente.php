<?php
class Utente
{
    protected string $nome;
    protected string $cognome;
    protected int $eta;
    private object $cartaCredito;
    private bool $registrato;

    public function  __construct(string $nome, string $cognome, bool $registrato)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->registrato = $registrato;
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

    /**
     * Get the value of registrato
     */
    public function getRegistrato()
    {
        return $this->registrato;
    }
}
