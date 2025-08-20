<?php

class Produto{
    private int $codigo;
    private string $nome;
    private float $valor;
    

    #================== Getters e Setters ==================

    public function getCodigo()
    {
        return $this->codigo;
    }
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }


    public function getValor()
    {
        return $this->valor;
    }
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }


    #================== Métodos ==================

    public function __construct(int $codigo, string $nome, float $valor)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function imprimir()
    {
        echo "Código: " . $this->codigo . "<br>";
        echo "Nome: " . $this->nome . "<br>";
        echo "Valor: R$" . $this->valor . "<br>";
    }

    public function __toString()
    {
        return $this->nome;
    }
}

?>