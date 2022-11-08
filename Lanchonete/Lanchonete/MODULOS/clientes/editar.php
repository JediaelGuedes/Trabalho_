<?php 
if(isset($_GET["id"])&&is_numeric($_GET["id"])){
    $sql = "SELECT * FROM clientes WHERE id_clientes = :id_clientes";
    $stmt = DB::conexao()->prepare($sql);
    $stmt->bindParam(":id_clientes", $id, PDO::PARAM_INT);
    $clientes = $stmt->execute();
    ?>

form method="POST" action="">
nome: <input type="text" name="nome" /> <br/>
email: <input type="text" name="email" /> <br/>
<input type="submit" name="button" value="Salvar" />
</form>

<?php
}
?>
<?php  ?>
<input type="text" name="nome"
value="<?=$clientes[0]['nome'];?>"/><br/>
<?php  ?>

<?php  ?>
<input type="text" name="email"
value="<?=$clientes[0]['email'];?>"/><br/>
<?php  ?>




