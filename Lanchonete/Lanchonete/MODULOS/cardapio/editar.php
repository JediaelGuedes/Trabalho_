<?php 
if(isset($_GET["id"])&&is_numeric($_GET["id"])){
    $sql = "SELECT * FROM cardapio WHERE id_cardapio = :id_cardapio";
    $stmt = DB::conexao()->prepare($sql);
    $stmt->bindParam(":id_cardapio", $id, PDO::PARAM_INT);
    $cardapio = $stmt->execute();
    ?>

form method="POST" action="">
Quantidade: <input type="text" name="Quantidade" /> <br/>
Tipo: <input type="text" name="Tipo" /> <br/>
<input type="submit" name="button" value="Salvar" />
</form>

<?php
}
?>
<?php //quantidade ?>
<input type="text" name="quantidade"
value="<?=$cardapio[0]['quantidade'];?>"/><br/>
<?php //preco ?>
<input type="text" name="preco"
value="<?cardapio[0]['preco'];?>"/><br/>