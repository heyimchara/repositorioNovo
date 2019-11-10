Nome: <?= $pedido['nomeUsuario']?><br>
Envio: <?= $pedido['logradouro']?><br>
Pagamento: <?= $pedido['descricao']?><br><br>

<?php foreach ($produtos as $produto) : ?>

Cod_produto: <?= $produtos['cod_produto']?><br>
Quantidade: <?= $produtos['quantidade']?>


<?php endforeach; ?>
