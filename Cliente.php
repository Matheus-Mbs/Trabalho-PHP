<?php

require_once('Pessoa.php');
require_once('Data.php');

date_default_timezone_set('America/Sao_Paulo');

class Cliente extends Pessoa{
    private Data $dataCadastro;
    private string $preferencias;


    #================== Getters e Setters ==================

    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }
    public function setDataCadastro($dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;

        return $this;
    }

    public function getPreferencias()
    {
        return $this->preferencias;
    }
    public function setPreferencias($preferencias)
    {
        $this->preferencias = $preferencias;

        return $this;
    }


    #================== Métodos ==================

    public function __construct(string $nome, string $cpf, string $sexo, int $dia, int $mes, int $ano, string $preferencias)
    {
        parent::__construct($nome, $cpf, $sexo, $dia, $mes, $ano);
        $this->dataCadastro = new Data(date('d'), date('m'), date('Y'));
        $this->preferencias = $preferencias;
    }

    public function imprimir()
    {
        parent::imprimir();
        echo "Data Cadastro: " . $this->dataCadastro . "<br>";
    }
}

?>