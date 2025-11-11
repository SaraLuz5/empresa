<?php

require_once("Empresa.php");

class Estagiario extends Empresa
{

    public function getSalario()
        {
            $dados = $this->pagamento + 1500 * 0.8;
            return $dados;
        }

        public function getFuncao()
            {
                return "Estagiario";
            }
   
}
