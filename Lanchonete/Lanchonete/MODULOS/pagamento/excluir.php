<?php
if(isset($_GET["id"])&&is_numeric($_GET["id"])){

    $sql = "DELETE FROM pagamento WHERE id_pagamento = :id_pagamento";
    $stmt = conexao()->prepare($sql);
    $stmt->bindParam(':id_pagamento', $_GET["id"]);
    $stmt->execute();




}
?>