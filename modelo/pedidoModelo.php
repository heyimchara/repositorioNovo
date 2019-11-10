<?php

function salvaPedidos($cod_cliente, $cod_formadepagamento, $idEndereco, $produtos){
    $comando = "INSERT INTO pedido (cod_cliente, cod_formadepagamento, idEndereco, datacompra)"
            . "VALUES ('$cod_cliente', '$cod_formadepagamento', '$idEndereco', 'CURDATE()')";
    $id_pedido = mysqli_insert_id($cnx);
    foreach ($produtos as $produto):
    $comando = "INSERT INTO pedido_produto (cod_produto, id_pedido, quantidade)"
            . "VALUES ('$produto[cod_produto]', '$id_pedido', '1')";    
    endforeach;
    $resultado = mysqli_query($conexao = conn(), $comando);
    if(!$resultado){ die('Erro no cadastro!' . mysqli_error($conexao));}
    return 'Cadastrado com sucesso!';
}

function listarPedidos(){
   $sql =  "SELECT * FROM pedido";
   $resultado = mysqli_query($conexao = conn(), $comando);
   $pedido = array();
   while ($linha = mysqli_fetch_assoc($resultado)){
    $pedido[] = $linha;   
   }
   return $pedido;
}

function selecionarPedido($id_pedido){
    $comando = "SELECT * FROM pedido WHERE id_pedido = $id_pedido" ;
    $resultado = mysqli_query($conexao = conn(), $comando);
    $pedido = mysqli_fetch_assoc($resultado);
    return $pedido;
}

function pegarPedidoProdutos($id_pedido){
    $comando = "SELECT * FROM pedido_produto WHERE id_pedido = $id_pedido";
    while ($linha = mysqli_fetch_assoc($resultado)){
    $pedido[] = $linha;   
   }
   return $pedido;
}
?>

