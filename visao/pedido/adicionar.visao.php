<form action="" method="POST">
<h2>Pedidos</h2>
<h2>Selecione o endereço</h2> 
Endereços: <select name="logradouro">
<option value="default"></option>
<?php foreach ($enderecos as $endereco): ?>
<option value="<?=@$endereco["idEndereco"]?>"><?=@$endereco["logradouro"]?></option>
<?php endforeach;?>
</select>

<h2>Selecione cupom</h2> 
<form action="" method="POST">
Digite o código de seu cupom ou vale: <input type="text" name="id_cupom" value="<?=@$cupom['id_cupom']?>">

<h2>Selecione a forma de pagamento</h2> 
FormasDePagamento: <select name="cod_formadepagamento">
<option value="default"></option>
<?php foreach ($formasdepagamento as $formadepagamento): ?>
<option value="<?=@$formadepagamento["cod_formadepagamento"]?>"><?=@$formadepagamento["descricao"]?></option>
<?php endforeach;?>
</select>

<h2>Produtos</h2>
<?php foreach ($produtos as $produto): ?>

<?php endforeach;?>

<p>Total</p>


<br>
<button>Finalizar</button>
</form>
