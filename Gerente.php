<?php

require_once("Empresa.php");

class Gerente extends Empresa
{

    public function getSalario()
    {
        $dados = $this->pagamento = 1500 * 4.5;
        return $dados;
    }

    public function getFuncao()
    {
        return "Gerente";
    }
}
