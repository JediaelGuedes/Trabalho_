<?php
include('classes/conexao.php');


if(isset($_POST["botao"])&&$_POST["botao"]=="salvar"){
    echo "O formulario foi enviado";
$Forma_de_pagamento = $_POST['Forma_de_pagamento'];
$parcelas = $_POST['parcelas'];

$sql = "INSERT INTO pagamento (Forma_de_pagamento, parcelas) 
        VALUES (Forma_de_pagamento, parcelas)";
$stmt = conexao()->prepare($sql);
$stmt->binParam(1, $Forma_de_pagamento);
$stmt->binParam(2, $parcelas);
$stmt->execute();
echo "salvo com sucesso";


}
?>

<form method="POST" action=“resultado.php">
Forma_de_pagamento: <input type="text" name="Forma_de_pagamento" /> <br/>
parcelas: <input type="text" name="parcelas" /> <br/>
<input type="submit" name="button" value=“Enviar" />
</form>