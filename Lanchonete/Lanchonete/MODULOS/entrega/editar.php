<?php 
if(isset($_GET["id"])&&is_numeric($_GET["id"])){
    $sql = "SELECT * FROM entrega WHERE id_entrega = :id_entrega";
    $stmt = DB::conexao()->prepare($sql);
    $stmt->bindParam(":id_entrega", $id, PDO::PARAM_INT);
    $entrega = $stmt->execute();
    ?>

form method="POST" action="">
endereco: <input type="text" name="endereco" /> <br/>
cep: <input type="text" name="cep" /> <br/>
<input type="submit" name="button" value="Salvar" />
</form>

<?php
}
?>
<?php  ?>
<input type="text" name="endereco"
value="<?=$entrega[0]['endereco'];?>"/><br/>
<?php  ?>

<?php  ?>
<input type="text" name="cep"
value="<?=$entrega[0]['cep'];?>"/><br/>
<?php  ?>


