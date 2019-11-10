<h2>Listar Pedidos</h2>
        
   <table class="table">
            <thead>
                <tr>
                    <th>Usuário</th>
                    <th>Endereço</th>
                    <th>Pagamento</th>
                    <th>Detalhes</th>
                </tr>
            </thead>
        <?php foreach ($pedidos as $pedido): ?> 
            <tr>
                <td><?=$pedido['nomeUsuario']?></td>
                <td><?=$pedido['logradouro']?></td>
                <td><?=$pedido['descricao']?></td>
                <td><a href="./pedido/ver/<?=$pedido['id_pedido']?>">Ver</a></td>
            </tr>
        <?php endforeach; ?>
   </table> 
        <br>
        <a href="./formadepagamento/adicionar" class="">Nova Forma de Pagamento</a>
        
        <br><br>
        


  