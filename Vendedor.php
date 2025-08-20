<?php

require_once('Pessoa.php');

class Vendedor extends Pessoa{
    private float $salario;
    private float $comissao;

    

    #================== Getters e Setters ==================

    public function getSalario()
    {
        return $this->salario;
    }
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    public function getComissao()
    {
        return $this->comissao;
    }
    public function setComissao($comissao)
    {
        $this->comissao = $comissao;

        return $this;
    }


    #================== Métodos ==================

   public function __construct(string $nome, string $cpf, string $sexo, int $dia, int $mes, int $ano, float $salario, float $comissao)
    {
        parent::__construct($nome, $cpf, $sexo, $dia, $mes, $ano);
        $this->salario = $salario;
        $this->comissao = $comissao;
    }

    public function imprimir()
    {
        parent::imprimir();
        echo "Salario: " . $this->salario . "<br>";
        echo "Comissão: " . $this->comissao . "%<br>";
    }
}

?>