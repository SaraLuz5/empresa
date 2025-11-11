<?php

abstract class Empresa
{

    protected $pagamento;
    protected $nome;

    public abstract function getFuncao();
    public abstract function getSalario();

    

    /**
     * Get the value of pagamento
     */
    public function getPagamento()
    {
        return $this->pagamento;
    }

    /**
     * Set the value of pagamento
     */
    public function setPagamento($pagamento): self
    {
        $this->pagamento = $pagamento;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }
}
