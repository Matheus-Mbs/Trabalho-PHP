<?php

require_once('Data.php');
require_once('Vendedor.php');
require_once('Cliente.php');
require_once('itemPedido.php');

class Pedido{
    private Data $data;
    private array $listaItens;
    private Cliente $cliente;
    private Vendedor $vendedor;
    private float $valorTotal;

 
    #================== Getters e Setters ==================

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    public function getListaItens()
    {
        return $this->listaItens;
    }
    public function setListaItens($listaItens)
    {
        $this->listaItens = $listaItens;

        return $this;
    }

    public function getCliente()
    {
        return $this->cliente;
    }
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    public function getVendedor()
    {
        return $this->vendedor;
    }
    public function setVendedor($vendedor)
    {
        $this->vendedor = $vendedor;

        return $this;
    }

    public function getValorTotal()
    {
        return $this->valorTotal;
    }
    public function setValorTotal($valorTotal)
    {
        $this->valorTotal = $valorTotal;

        return $this;
    }


    #================== Métodos ==================

    public function __construct(Cliente $cliente, Vendedor $vendedor, itemPedido $itemPedido)
    {
        $this->cliente = $cliente;
        $this->vendedor = $vendedor;
        $this->listaItens[] = $itemPedido;
        $this->data = new Data(date('d'), date('m'), date('Y'));
    }

    public function adicionarItem(Produto $produto, int $quantidade)
    {
        $tempItemPedido = new itemPedido($produto, $quantidade);
        $this->listaItens[] = $tempItemPedido;
    }

    private function calcularValorTotal()
    {
        $valorTotal = 0;
        foreach($this->listaItens as $itemPedido){
            $valorTotal += $itemPedido->getValor();
        }
        return $valorTotal;
    }

    private function adicionarComissao()
    {
        return $this->valorTotal *= 1.03;
    }

    public function fecharPedido()
    {
        $this->valorTotal = $this->calcularValorTotal();
        $this->adicionarComissao();
    }

    public function imprimirPedidoCompleto()
    {
        echo "Data: " . $this->data . "<br>";
        echo "Cliente: " . $this->cliente->getNome() . "<br>";
        echo "Vendedor: " . $this->vendedor->getNome() . "<br>";
        echo "Valor Total: " . $this->valorTotal . "<br>";
    }
}

?>