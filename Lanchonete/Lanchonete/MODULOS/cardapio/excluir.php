<?php
if(isset($_GET["id"])&&is_numeric($_GET["id"])){

    $sql = "DELETE FROM cardapio WHERE id_cardapio = :id_cardapio";
    $stmt = conexao()->prepare($sql);
    $stmt->bindParam(':id_cardapio', $_GET["id"]);
    $stmt->execute();




}
?>