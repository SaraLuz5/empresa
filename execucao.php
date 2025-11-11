<?php

require_once("modelo/Desenvolvedor.php");
require_once("modelo/Empresa.php");
require_once("modelo/Estagiario.php");
require_once("modelo/Gerente.php");

$opcao = 0;

do {



    $opcao = readline("0-Encerrar Programa, 1- Gerente, 2- Desenvolvedor, 3- Estagiário \n");

   if($opcao == 1) {
        
    $funcionario = new Gerente();
    $funcionario->setNome(readline("Informe seu nome: \n"));
    echo "O funcionario " . $funcionario->getNome() . " de cargo " . $funcionario->getFuncao() . " possui salário de R$ " . $funcionario->getSalario() . "\n";
    }

     else if($opcao == 2){

    $funcionario = new Desenvolvedor();
    $funcionario->setNome(readline("Informe seu nome: \n"));
    echo "O funcionario " . $funcionario->getNome() . " de cargo " . $funcionario->getFuncao() . " possui salário de R$ " . $funcionario->getSalario() . "\n";
    }

    else if($opcao == 3){

    $funcionario = new Estagiario();
    $funcionario->setNome(readline("Informe seu nome: \n"));
    echo "O funcionario " . $funcionario->getNome() . " de cargo " . $funcionario->getFuncao() . " possui salário de R$ " . $funcionario->getSalario() . "\n";

    }

    else if($opcao == 0){
        echo "Programa encerrado! \n";
    }

} while ($opcao != 0);
