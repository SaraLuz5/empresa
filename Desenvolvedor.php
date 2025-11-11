<?php

require_once("Empresa.php");

class Desenvolvedor extends Empresa
{
    public function getSalario()
    {
        $dados = $this->pagamento + 1500 * 2.3;
        return $dados;
    }

    public function getFuncao()
        {
            return "Desenvolvedor";
        }
}
