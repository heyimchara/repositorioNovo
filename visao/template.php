<html class="no-js" lang="en" dir="ltr">
    <head>
        <title>Modas LM</title>
        <base href="<?= URL_BASE ?>"><!--Esta instrução é super importante e não deve ser mudada!-->
        <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modas LM</title>
    <link rel="stylesheet" href="./publico/css/app.css">
    <link rel="stylesheet" href="./publico/css/foundation-icons.css" />

  <!-- foundation-float.min.css: Compressed CSS with legacy Float Grid -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.0/dist/css/foundation-float.min.css" integrity="sha256-6gKcI9FMwYa0cREDijDPEanZX+TXP5FQsAYxgP3PGeY= sha384-whJLw6nWgfRYEj1Vmfxc1YCBXOxktFK7lXPFi5htbBtHofjJt5WnWFWrXmSpAACM sha512-q2pM7Q5U4ewl6vP0upeWuhDCSIecXB4zTXpz7pmy8ir4/YtnrW4CuZT7oh4zgo+7Z9N5qxHiApfwN2ckkdJXIg==" crossorigin="anonymous">

<!-- foundation-prototype.min.css: Compressed CSS with prototyping classes -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.0/dist/css/foundation-prototype.min.css" integrity="sha256-Fzf994tjsTgw//IQGRZ3lD06saNIhlpQn0e5KcwES7w= sha384-wEIeUdieQx8mLSxzj2StwFkrNCe/dgAQh1AI1CqpGHub9BA0CZyU2hB27gLECxh7 sha512-ZWXT7xErbuNOHh7nJ0s/ncReLVGMyQTZgQDPl2RgtzaabGIj5iG4HTv4r1GT4W5nFN4boD6lFe2TEFlMETxJwg==" crossorigin="anonymous">

<!-- foundation-rtl.min.css: Compressed CSS with right-to-left reading direction -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.5.0/dist/css/foundation-rtl.min.css" integrity="sha256-s4KBAZhgv2AtVXZq6NgpdJFF1LlSgW+9BgkiwKlxYRY= sha384-p3+9iP9hNFdv7nWoURZEKqb2lQH8Vbd6Nci4oxfWMI7YAbAmdNHFKUwAdbymqTuM sha512-QPhUjZz+k8NYHLTtcX1O9Avi+MGeWegajzywxR28uPN0FHMi7na+K4PYEZ0IO4ciXNc7jIQUQB0myUyZEJXX4Q==" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none}
.w3-left, .w3-right, .w3-badge {cursor:pointer}
.w3-badge {height:13px;width:13px;padding:0}
</style>

    <link rel="stylesheet" type="text/css" href="./publico/css/app.css">
    <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    
     <?php include('cabecalho.php');?>

    <body>
        
        <div class="corpinho">
            <div class="caixinha">
                
                
 <?php if (acessoPegarPapelDoUsuario() == 'admin') { ?>              
        <a href="./categoria/listarCategorias">Categoria</a>
        <a href="./produto/listarProdutos">Produto</a>
        <a href="./cliente/listarClientes">Cliente</a>
	<a href="./cupom/listarCupom"> Cupom </a>
        <a href="./formadepagamento/listarFormasDePagamento">Forma de Pagamento</a>
<?php }
elseif (acessoPegarPapelDoUsuario() == 'user'){  ?>
        <a href="./produto/listarProdutos">Produto</a>
        
<?php }
else { ?>
    <a href="./produto/listarProdutos">Produto</a>
    
<?php }?>
      
<?php 
       // <a href="./categoria/listarCategorias">Categoria</a>
        //<a href="./produto/listarProdutos">Produto</a>
      //  <a href="./cliente/listarClientes">Cliente</a>
       
  ?>     
        
        
        <main class="container">
         
            <?php require $viewFilePath; ?>
            
        </main>

        </div>
            </div>
       
         <br><br>
    </body>
    <?php include('rodape.php');?>

</html>