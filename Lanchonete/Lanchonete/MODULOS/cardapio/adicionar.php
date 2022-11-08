<?php
include('classes/conexao.php');


if(isset($_POST["botao"])&&$_POST["botao"]=="salvar"){
    echo "O formulario foi enviado";
$Quantidade = $_POST['Quantidade'];
$preco = $_POST['preco'];

$sql = "INSERT INTO CARDAPIO (Quantidade, preco) 
        VALUES (Quantidade,preco)";
$stmt = conexao()->prepare($sql);
$stmt->binParam(1, $Quantidade);
$stmt->binParam(2, $preco);
$stmt->execute();
echo "salvo com sucesso";


}
?>

form method="POST" action="">
Quantidade: <input type="text" name="Quantidade" /> <br/>
Tipo: <input type="text" name="Tipo" /> <br/>
<input type="submit" name="button" value="Salvar" />
</form>

