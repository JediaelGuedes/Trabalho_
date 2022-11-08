<?php
if(isset($_GET["id"])&&is_numeric($_GET["id"])){

    $sql = "DELETE FROM localizacao WHERE id_localizacao = :id_localizacao";
    $stmt = conexao()->prepare($sql);
    $stmt->bindParam(':id_localizacao', $_GET["id"]);
    $stmt->execute();




}
?>