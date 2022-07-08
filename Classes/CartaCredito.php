<?php
class CartaCredito
{
    private string $nome;
    private string $tipo;
    private string $scadenza;
    private string $numero;

    public function  __construct(string $nome, string $tipo, string $scadenza, string $numero)
    {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->scadenza = $scadenza;
        $this->numero = $numero;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Get the value of tipo
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Get the value of scadenza
     */
    public function getScadenza()
    {
        return $this->scadenza;
    }

    /**
     * Get the value of numero
     */
    public function getNumero()
    {
        return $this->numero;
    }
}
