<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/loja.css"/>
    <title>Document</title>
</head>
<body>
    <header> Topo do template</header>
        <nav>
            <a href="?modulo=localizao&acao=adicionar">localizacao</a><br/>
            <a href="?modulo=cardapio&acao=adicionar">cardapio</a><br/>
            <a href="?modulo=clientes&acao=adicionar">clientes</a><br/>
            <a href="?modulo=entrega&acao=adicionar">entrega</a><br/>
            <a href="?modulo=pagamento&acao=adicionar">pagamento</a>
            <a href="conexao">conexao</a>
        </nav>
        <!-- MODULO -->
    <?php
        if(isset($_GET["modulo"])){
            $modulo=$_GET["modulo"];
        }
        else{
            $modulo= false;
        }
        
        
        if(isset($_GET["acao"])){
            $acao= $_GET["acao"];
        }
        else{
            $acao=false; 
        }
       
            $url= "modulos/".$modulo."/".$acao.".php";
            if($modulo && $acao && file_exists($url)){
                include($url);
        }
        else{
            echo "Página solicitada não existe";
        }
    ?>

    <footer>Rodapé do template</footer>
</body>
</html>