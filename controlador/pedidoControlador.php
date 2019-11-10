<?php
require_once 'modelo/pedidoModelo.php';
require_once 'modelo/enderecoModelo.php';
require_once 'modelo/formadepagamentoModelo.php';

function salvarPedido(){
    $cod_cliente = acessoPegarUsuarioLogado();
    $produtos = $_SESSION["carrinho"];
 if(ehPost()){
       $cod_formadepagamento = $_POST["cod_formadepagamento"];
       $idEndereco = $_POST["idEndereco"];
       $id_cupom = $_POST["id_cupom"];
       $desconto = pegarCupomPorId($id_cupom);
       $desconto = $desconto['desconto']/100;
       echo $desconto;
       $total = 0;  
       
       
      $mensagem = salvaPedidos($cod_cliente, $cod_formadepagamento, $idEndereco, $produtos);
      echo $mensagem;
      redirecionar("pedido/listarPedidos");
 } else{
     $dados = [];
     $dados['enderecos'] = pegarEnderecosPorUsuario($cod_cliente);
     $dados['formadepagamento'] = pegarTodasFormasDePagamento();
     $dados['produtos'] = $produtos;
     exibir("pedido/adicionar", $dados);
 }
 
}
     
function listarPedido(){
    $dados = array();
    $dados["pedidos"] = listarPedidos($cod_cliente);
    exibir("pedido/listar", $dados);
}

function ver($id_pedido){
    $dados = array();
    $dados['pedido'] = selecionarPedido($id_pedido);
    $dados['produtos'] = pegarPedidoProdutos($id_pedido);
    exibir("pedido/visualizar", $dados);
}