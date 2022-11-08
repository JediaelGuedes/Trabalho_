<?php
if(isset($_GET["id"])&&is_numeric($_GET["id"])){

    $sql = "DELETE FROM clientes WHERE id_clientes = :id_clientes";
    $stmt = conexao()->prepare($sql);
    $stmt->bindParam(':id_clientes', $_GET["id"]);
    $stmt->execute();




}
?>