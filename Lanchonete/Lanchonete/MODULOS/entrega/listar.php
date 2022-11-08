<?php 



$sql = "SELECT * FROM entrega"; 
$stmt = conexao()->prepare($sql);
$stmt->execute();

$entrega = $stmt->fetchAll();

print_r($entrega);


?>

<table>

<tr>
    <th>#</th>
    <th>endereco</th>
    <th>entrega</th>
</th>

<?php foreach($entrega as $entrega) {?>
<tr>
    <td><?php echo $entrega['id']; ?></td>
    <td><?php echo $entrega['endereco']; ?></td>
    <td><?php echo $entrega['cep']; ?></td>
    <td>
    <a href="?modulo=entrega$acao=excluir&id<?=$entrega['id'];?>">
    EXCLUIR
</a>

<a href="?modulo=entrega$acao=editar&id<?=$entrega['id'];?>">
    EDITAR
</a>


</tr>
<?php } ?>
</table> 





}