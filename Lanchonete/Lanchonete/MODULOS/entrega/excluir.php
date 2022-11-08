<?php
if(isset($_GET["id"])&&is_numeric($_GET["id"])){

    $sql = "DELETE FROM entrega WHERE id_entrega = :id_entrega";
    $stmt = conexao()->prepare($sql);
    $stmt->bindParam(':id_entrega', $_GET["id"]);
    $stmt->execute();




}
?>