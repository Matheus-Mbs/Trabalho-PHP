<?php

class Data {
    private int $dia;
    private int $mes;
    private int $ano;

    #================== Getters e Setters ==================

    public function getDia()
    {
        return $this->dia;
    }
    public function setDia($dia)
    {
        $this->dia = $dia;

        return $this;
    }

    public function getMes()
    {
        return $this->mes;
    }
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    public function getAno()
    {
        return $this->ano;
    }
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }


    #================== Métodos ==================

    public function __construct($d, $m, $a)
    {
        $this->dia = $d;
        $this->mes = $m;
        $this->ano = $a;
    }

    public function __toString()
    {
        return $this->dia . "/" . $this->mes . "/" . $this->ano;
    }

    public function imprimirDataBanco()
    {
        echo $this;
    }

}