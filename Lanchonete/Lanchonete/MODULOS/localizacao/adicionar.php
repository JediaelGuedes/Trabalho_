<?php
include('classes/conexao.php');


if(isset($_POST["botao"])&&$_POST["botao"]=="salvar"){
    echo "O formulario foi enviado";
$bairro = $_POST['bairro'];


$sql = "INSERT INTO localizacao (bairro) 
        VALUES (bairro)";
$stmt = conexao()->prepare($sql);
$stmt->binParam(1, $bairro);
$stmt->execute();
echo "salvo com sucesso";


}
?>

<form method="POST" action=“resultado.php">
Bairro: <input type="text" name="Bairro" /> <br/>

<input type="submit" name="button" value=“Enviar" />
</form>