<?php 
if(isset($_GET["id"])&&is_numeric($_GET["id"])){
    $sql = "SELECT * FROM localizacao WHERE id_localizacao = :id_localizacao";
    $stmt = DB::conexao()->prepare($sql);
    $stmt->bindParam(":id_localizacao", $id, PDO::PARAM_INT);
    $localizacao = $stmt->execute();
    ?>

form method="POST" action="">
Bairro: <input type="text" name="bairro" /> <br/>

<input type="submit" name="button" value="Salvar" />
</form>

<?php
}
?>
<?php  ?>
<input type="text" name="bairro"
value="<?=$localizacao[0]['bairro'];?>"/><br/>
<?php  ?>



