<?php

require_once('Produto.php');

class itemPedido{
    private Produto $item;
    private int $quantidade;
    private float $valor;

    
    #================== Getters e Setters ==================

    public function getItem()
    {
        return $this->item;
    }
    public function setItem($item)
    {
        $this->item = $item;

        return $this;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;

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

    public function __construct(Produto $item, int $quantidade)
    {
        $this->item = $item;
        $this->quantidade = $quantidade;
        $this->valor = $quantidade * $item->getValor();
    }

    public function __toString()
    {
        return "<br>Nome: " . $this->item . "<br>Quantidade: " . $this->quantidade . "<br>Valor: " . $this->valor . "<br>";  
    }
}

?>