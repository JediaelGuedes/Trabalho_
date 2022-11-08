<?php 
if(isset($_GET["id"])&&is_numeric($_GET["id"])){
    $sql = "SELECT * FROM pagamento WHERE id_pagamento = :id_pagamento";
    $stmt = DB::conexao()->prepare($sql);
    $stmt->bindParam(":id_pagamento", $id, PDO::PARAM_INT);
    $pagamento = $stmt->execute();
    ?>

form method="POST" action="">
Forma_de_pagamento: <input type="text" name="Forma_de_pagamento" /> <br/>
parcelas: <input type="text" name="parcelas" /> <br/>
<input type="submit" name="button" value="Salvar" />
</form>

<?php
}
?>
<?php  ?>
<input type="text" name="Forma_de_pagamento"
value="<?=$pagamento[0]['Forma_de_pagamento'];?>"/><br/>
<?php  ?>

<?php  ?>
<input type="text" name="parcelas"
value="<?=$pagamento[0]['parcelas'];?>"/><br/>
<?php  ?>


