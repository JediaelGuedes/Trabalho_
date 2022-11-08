

<?php 



$sql = "SELECT * FROM localizacao"; 
$stmt = conexao()->prepare($sql);
$stmt->execute();

$localizacao = $stmt->fetchAll();

print_r($localizacao);


?>

<table>

<tr>
    <th>#</th>
    <th>bairro</th>
    
</th>

<?php foreach($localizacao as $localizacao) {?>
<tr>
    <td><?php echo $localizacao['id']; ?></td>
    <td><?php echo $localizacao['bairro']; ?></td>
   
    <td>
    <a href="?modulo=localizacao$acao=excluir&id<?=$localizacao['id'];?>">
    EXCLUIR
</a>

<a href="?modulo=localizacao$acao=editar&id<?=$localizacao['id'];?>">
    EDITAR
</a>


</tr>
<?php } ?>
</table> 





}