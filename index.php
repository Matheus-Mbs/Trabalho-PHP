<?php

require_once('Data.php');
require_once('Vendedor.php');
require_once('Cliente.php');
require_once('Produto.php');
require_once('itemPedido.php');
require_once('Pedido.php');

$data = new Data(11,01,2008);
// $data->imprimirDataBanco();

$vendedor = new Vendedor("Matheus", "133", "M", 11, 1, 2008, 1229.90, 0.40);
// $vendedor->imprimir();

$cliente = new Cliente("Felipe", "133", "M", 11, 1, 2008, "Dayz");
// $cliente->imprimir();

$produto1 = new Produto(298, "Mídia Digital Dayz", 120);
// $produto1->imprimir();

$produto2 = new Produto(298, "Mídia Digital COD", 80);

$itemPedido1 = new itemPedido($produto1, 10);

$itemPedido2 = new itemPedido($produto2, 10);

$pedido = new Pedido($cliente, $vendedor, $itemPedido1);
$pedido->adicionarItem($produto2, 10);
$pedido->fecharPedido();
$pedido->imprimirPedidoCompleto();

?>