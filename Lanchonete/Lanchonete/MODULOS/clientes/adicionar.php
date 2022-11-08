<?php
include('classes/conexao.php');


if(isset($_POST["botao"])&&$_POST["botao"]=="salvar"){
    echo "O formulario foi enviado";
$Quantidade = $_POST['nome'];
$preco = $_POST['email'];

$sql = "INSERT INTO clientes (nome, email) 
        VALUES (nome, email)";
$stmt = conexao()->prepare($sql);
$stmt->binParam(1, $nome);
$stmt->binParam(2, $email);
$stmt->execute();
echo "salvo com sucesso";


}
?>



<form method="POST" action=“resultado.php">
Nome: <input type="text" name="nome" /> <br/>
E-mail: <input type="text" name="email" /> <br/>
<input type="submit" name="button" value=“Enviar" />
</form>