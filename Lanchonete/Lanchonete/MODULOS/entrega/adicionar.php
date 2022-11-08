<?php
include('classes/conexao.php');


if(isset($_POST["botao"])&&$_POST["botao"]=="salvar"){
    echo "O formulario foi enviado";
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];

$sql = "INSERT INTO entrega (endereco, cep) 
        VALUES (endereco, cep)";
$stmt = conexao()->prepare($sql);
$stmt->binParam(1, $endereco);
$stmt->binParam(2, $cep);
$stmt->execute();
echo "salvo com sucesso";


}
?>



<form method="POST" action=“resultado.php">
Endereco: <input type="text" name="Endereco" /> <br/>
Cep: <input type="text" name="Cep" /> <br/>
<input type="submit" name="button" value=“Enviar" />
</form>